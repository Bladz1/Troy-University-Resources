# Đóng Góp

>"A society grows great when old men plant trees in whose shade they know they shall never sit."  
— **Greek Proverb**

Xin chào, nếu bạn đang đọc file này thì khả năng là bạn đang muốn đóng góp thông tin cho repo! Cảm ơn bạn!  
File này sẽ trả lời một số câu hỏi thường gặp và hướng dẫn qua cách đóng góp cho repo.  
Nếu như bạn vẫn còn thắc mắc, bạn có thể mở một [discussion][github-discussions] trên repo này.  

## Tôi có thể đóng góp những gì?

- Bất kì những gì bạn nghĩ có thể giúp ích cho sinh viên hiện tại hoặc tương lai! Ví dụ như:
  - Tài liệu mới (đề thi 👀, slide, bài tập mẫu, ...)
  - Cập nhật thông tin môn học/giảng viên đã lỗi thời
  - Thêm thông tin còn thiếu
  - Sửa lỗi chính tả, format, cấu trúc của repo
  - Giải quyết một [issue][github-issue]
  - ...

## Vậy cấu trúc của repo này như nào?

```bash
Troy-University-Resources/                                 # Root
├── .github/                                               #
│   └── workflows/                                         # Chứa các file cho Github Actions
├── COURSE-CODE/ (e.g ART-1133/, CS-2250/, ECO-2251/, ...) # Chứa các thư mục riêng biệt cho từng môn học, được đặt tên chuẩn theo mã môn
│   ├── Assignments/                                       # Chứa đề thi, bài tập, project, quiz, ...
│   ├── Modules/                                           # Chứa slide bài giảng
│   ├── References/                                        # Chứa sách giáo trình, tài liệu tham khảo bên ngoài, cheat sheet, ...
│   ├── Syllabi/                                           # Chứa các lộ trình môn học
│   └── README.md                                          # Thông tin tổng quan của môn học (review môn học, danh sách giảng viên, ...)
├── Faculty/                                               # Chứa thông tin về các giảng viên Troy (dưới dạng `Ten-Giang-Vien.md`)
├── Ly-Luan-Chinh-Tri/                                     # Thông tin tổng quan về các môn LLCT
├── Miscellaneous/                                         # Chứa các dữ liệu ngoài lề không thuộc về folder môn học, giảng viên.
├── .gitattributes                                         #
├── .gitignore                                             #
├── CONTRIBUTING.md                                        # File này!
├── LICENSE                                                # Giấy phép bản quyền (MIT)
└── README.md                                              # File tổng quan của repo.
```

## Tôi có cần lưu ý điều gì khi đóng góp không?

Bọn mình biết bạn đang bỏ thời gian của mình ra để giúp cho các sinh viên khác mà không đòi hỏi gì, và bọn mình không muốn được voi đòi tiên.  
Vì vậy, những yêu cầu dưới đây phần lớn chỉ là gợi ý. Dữ liệu là dữ liệu, bạn vẫn nên mở pull request nếu bạn có dữ liệu tốt kể cả nếu bạn không follow đúng format 100%. Những người đóng góp khác có thể sửa lại cho đúng format giúp bạn sau.  

### Những thứ nên làm

- **Định dạng file:**
  - Đề thi: Ưu tiên `PDF` > `Markdown` > `Ảnh` > Các định dạng khác.
  - Slide bài giảng: Nếu đang ở dạng PowerPoint (`.ppt`, `.pptx`), bạn nên xuất ra `PDF` để mọi người có thể xem trực tiếp trên GitHub mà không cần tải về.
- **Quy tắc đặt tên:**
  - Để thống nhất, hãy đặt tên thư mục/file theo chuẩn Pascal-Kebab case (Viết hoa chữ cái đầu của mỗi từ và nối nhau bằng dấu gạch ngang). 
  - *Ví dụ:* `Course-Descriptions/`, `Final-Exams/`, `Homework-Problems.pdf`...
- **Phân loại theo cấu trúc:**
  - Các tài liệu bên trong thư mục môn học nên được chia sâu hơn theo thứ tự: `.../Kỳ-Học/Giảng-Viên/Loại-Tài-Liệu/Mã-Lớp/...`
  - *Ví dụ:* 1 file đề thi giữa kì môn MTH-2215 của thầy Vũ Thế Khôi, kì Spring 2026 sẽ có đường dẫn như sau:
  `MTH-2215/Assignments/Spring-2026/Vu-The-Khoi/Exams/Midterm/MTH-2215_Midterm_IHAA_Spring-2026_Vu-The-Khoi.pdf`

## Vậy làm thế nào để tôi đóng góp cho repo này?

### Mở pull request

Nếu như bạn muốn đóng góp cho repo, bạn nên mở [pull request][github-pull-requests] (PR).  
Nếu đây là lần đầu và bạn chưa biết cách mở PR như thế nào, bạn có thể tham khảo hướng dẫn sau: [Hướng dẫn][github-first-contributions].  
Hướng dẫn này sẽ dẫn bạn thực hành qua cách tạo PR từ đầu đến cuối.

### Tạo issue

Nếu như bạn thấy có vấn đề gì với repo, hoặc có ý tưởng muốn đề xuất, bạn có thể tạo một [issue][github-issue] để báo cho những người đóng góp khác biết. Ví dụ như link lỗi, thông tin sai, format chưa chuẩn, ...


[github-discussions]: ../../discussions
[github-pull-requests]: ../../pulls
[github-issue]: ../../issues
[github-first-contributions]: https://github.com/firstcontributions/first-contributions
