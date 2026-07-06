public class TestVehicle {
  public static void main(String[] args) {

    // Create a vehicle that can handle 10,000 kilograms weight
    System.out.println("Creating a vehicle with a 10,000kg maximum load.");
    Vehicle vehicle = new Vehicle(10000.0);

    // Add a few boxes
    System.out.println("Add box #1 (500kg) : " + vehicle.addBox(500.0));
    System.out.println("Add box #2 (250kg) : " + vehicle.addBox(250.0));
    System.out.println("Add box #3 (5000kg) : " + vehicle.addBox(5000.0));
    System.out.println("Add box #4 (4000kg) : " + vehicle.addBox(4000.0));
    System.out.println("Add box #5 (300kg) : " + vehicle.addBox(300.0));

    // Print out the final vehicle load
    System.out.println("Vehicle load is " + vehicle.getLoad() + " kg");
  }
}
