import tkinter as tk
from tkinter import messagebox, ttk
import sv_ttk

# Test chức năng
def letter_to_point(letter: str) -> float | str | None:
    g
        return None
    else:
        return "INVALID"

class CourseRow:
    VALID_GRADES = ["A", "B", "C", "D", "F", "FI", "FA", "P", "AU", "DR", "I", "NG", "W"]

    def __init__(self, parent_frame: ttk.Frame, row_index: int, remove_callback: callable):
        self.parent_frame = parent_frame
        self.row_index = row_index
        self.remove_callback = remove_callback

        self.widgets = []

        self.stt_label = ttk.Label(parent_frame, text=str(self.row_index), anchor="center")
        self.widgets.append(self.stt_label)

        self.grade_combo = ttk.Combobox(parent_frame, values=self.VALID_GRADES, width=10)
        self.widgets.append(self.grade_combo)

        self.credit_spinbox = ttk.Spinbox(parent_frame, from_=0, to=10, increment=1, width=8)
        self.widgets.append(self.credit_spinbox)

        self.del_button = ttk.Button(parent_frame, text="❌", width=4, command=self.remove)
        self.widgets.append(self.del_button)

        self.grid_widgets()

    def grid_widgets(self):
        self.stt_label.grid(row=self.row_index, column=0, padx=5, pady=2, sticky="ew")
        self.grade_combo.grid(row=self.row_index, column=1, padx=5, sticky="ew")
        self.credit_spinbox.grid(row=self.row_index, column=2, padx=5, sticky="ew")
        self.del_button.grid(row=self.row_index, column=3, padx=5)

    def remove(self):
        self.remove_callback(self)

    def destroy(self):
        for widget in self.widgets:
            widget.destroy()

    def update_row_index(self, new_index: int):
        self.row_index = new_index
        self.stt_label.config(text=str(self.row_index))
        self.grid_widgets()

    def get_values(self) -> tuple[str, str]:
        grade = self.grade_combo.get().strip().upper()
        credit_str = self.credit_spinbox.get().strip()
        return grade, credit_str

class GPACalculator(tk.Tk):

    INITIAL_COURSES = 3
    MAX_COURSES = 20

    def __init__(self):
        super().__init__()
        self.title("TroyCalc")
        self.geometry("600x600")
        self.resizable(False, False)

        sv_ttk.set_theme("dark")

        self.course_rows = []
        self._create_widgets()
        self.update_idletasks()

        for _ in range(self.INITIAL_COURSES):
            self.add_course_row()

    def _create_widgets(self):
        style = ttk.Style()
        style.configure("Accent.TButton", font=("Arial", 10, "bold"))

        main_frame = ttk.Frame(self, padding="10")
        main_frame.pack(fill="both", expand=True)

        title_label = ttk.Label(main_frame, text="Tính GPA của ĐH Troy",
                                font=("Arial", 16, "bold"), anchor="center")
        title_label.pack(pady=(0, 15))

        button_frame = ttk.Frame(main_frame)
        button_frame.pack(pady=5, fill="x")
        button_frame.columnconfigure((0, 1, 2), weight=1)

        ttk.Button(button_frame, text="➕ Thêm môn", command=self.add_course_row).grid(row=0, column=0, sticky="ew", padx=2)
        ttk.Button(button_frame, text="🔄 Làm mới", command=self.reset_all).grid(row=0, column=1, sticky="ew", padx=2)
        ttk.Button(button_frame, text="Tính GPA", command=self.calculate_gpa, style="Accent.TButton").grid(row=0, column=2, sticky="ew", padx=2)

        courses_labelframe = ttk.LabelFrame(main_frame, text="Danh sách môn học", padding="10")
        courses_labelframe.pack(pady=10, fill="both", expand=True)
        self._setup_scrollable_frame(courses_labelframe)

        self.result_frame = ttk.LabelFrame(main_frame, text="Kết quả", padding="10")
        self.result_frame.pack(pady=10, fill="x")
        self.result_label = ttk.Label(self.result_frame, text="Nhập môn học và nhấn 'Tính GPA'",
                                       font=("Arial", 12, "italic"), anchor="center")
        self.result_label.pack(fill="x")

    def _setup_scrollable_frame(self, parent: ttk.Frame):
        self.canvas = tk.Canvas(parent, borderwidth=0, highlightthickness=0, background="#1c1c1c")
        scrollbar = ttk.Scrollbar(parent, orient="vertical", command=self.canvas.yview)
        self.scrollable_frame = ttk.Frame(self.canvas)

        self.scrollable_frame.bind(
            "<Configure>",
            lambda e: self.canvas.configure(scrollregion=self.canvas.bbox("all"))
        )
        canvas_window = self.canvas.create_window((0, 0), window=self.scrollable_frame, anchor="nw")

        self.canvas.bind(
            "<Configure>",
            lambda e: self.canvas.itemconfig(canvas_window, width=e.width)
        )
        self.canvas.configure(yscrollcommand=scrollbar.set)

        self.canvas.pack(side="left", fill="both", expand=True)
        scrollbar.pack(side="right", fill="y")

        self._create_headers()

    def _create_headers(self):
        headers = ["STT", "Điểm chữ", "Tín chỉ"]
        self.scrollable_frame.columnconfigure(0, weight=1)
        self.scrollable_frame.columnconfigure(1, weight=4)
        self.scrollable_frame.columnconfigure(2, weight=3)
        self.scrollable_frame.columnconfigure(3, weight=1)

        for i, header in enumerate(headers):
            label = ttk.Label(self.scrollable_frame, text=header, font=("Arial", 10, "bold"), anchor="center")
            label.grid(row=0, column=i, sticky="ew", padx=5, pady=(0, 5))

    def add_course_row(self):
        if len(self.course_rows) >= self.MAX_COURSES:
            return

        new_row_index = len(self.course_rows) + 1
        course_row = CourseRow(self.scrollable_frame, new_row_index, self.remove_course_row)
        self.course_rows.append(course_row)
        course_row.grade_combo.focus_set()
        self.after(10, lambda: self.canvas.yview_moveto(1.0))


    def remove_course_row(self, row_to_remove: CourseRow):
        if len(self.course_rows) <= 1:
            return

        row_to_remove.destroy()
        self.course_rows.remove(row_to_remove)

        for i, course_row in enumerate(self.course_rows):
            course_row.update_row_index(i + 1)

    def calculate_gpa(self):
        total_points = 0.0
        total_credits = 0.0
        has_input = False

        for i, course_row in enumerate(self.course_rows):
            grade, credit_str = course_row.get_values()

            if not grade and not credit_str:
                continue
            has_input = True

            try:
                credit = float(credit_str) if credit_str else 0.0
                if credit < 0: raise ValueError()
            except (ValueError, TypeError):
                messagebox.showerror("Lỗi", f"Tín chỉ không hợp lệ ở môn {i + 1}.")
                return

            point = letter_to_point(grade)
            if point == "INVALID":
                messagebox.showerror("Lỗi", f"Điểm chữ không hợp lệ ở môn {i + 1}.")
                return
            elif point is not None and credit > 0:
                total_points += point * credit
                total_credits += credit

        if not has_input:
            self.result_label.config(text="Chưa có thông tin.", font=("Arial", 12, "italic"))
            return

        if total_credits == 0:
            gpa_text = "Tín chỉ bằng 0 hoặc các môn không được tính vào GPA."
            font_style = ("Arial", 12, "italic")
        else:
            gpa = total_points / total_credits
            gpa_text = f"🎓 GPA của bạn: {gpa:.2f}  (Trên tổng số {int(total_credits)} tín chỉ)"
            font_style = ("Arial", 14, "bold")

        self.result_label.config(text=gpa_text, font=font_style)

    def reset_all(self):
        for course_row in self.course_rows:
            course_row.destroy()
        self.course_rows.clear()

        self.result_label.config(text="Nhập môn học và nhấn 'Tính GPA'", font=("Arial", 12, "italic"))

        for _ in range(self.INITIAL_COURSES):
            self.add_course_row()

if __name__ == "__main__":
    app = GPACalculator()
    app.mainloop()