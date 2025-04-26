class Employee{
    int Salary;
    String Name;
    public void getSalary(int a){
        Salary = a;
    }
    public void setName(String c){
        Name = c;
    }
    public void getName(){
        System.out.println(Name);
    }
    public void printDetails(){
        System.out.println("My name is " + Name );
        System.out.println("and my salary is " + Salary);
    }
}
class Square{
    float side;
    public void getSide(int a){
        side = a;
    }
    public float printArea(){
        // System.out.println("The area of square is: " + side * side);
        return (side * side);
    }
    public float printPerimeter(){
        // System.out.println("The perimeter of square is: " + 4 * side);
        return (4 * side);
    }
}
class Rectangle{
    int length ;
    int width ;
    public int printArea(){
        return length * width;
    }
    public int printPerimeter(){
        return 2 * (length + width);
    }
}
class Tommy{
    public void tommyIsRunning(){
        System.out.println("Tommy is running...");
    }
    public void tommyIsHitting(){
        System.out.println("Tommy is hitting...");
    }
    public void tommyIsFiring(){
        System.out.println("Tommy is firing...");
    }
}
class Circle{
    int radius;
    float pi = 3.14f;
    public float printArea(){
        return pi * radius * radius;
    }
    public float printPerimeter(){
        return 2 * pi * radius;
    }
}
public class Practice_Set_08 {
    public static void main(String[] args) {
        /*
        // Problem 1:
        Employee avi = new Employee();
        avi.getSalary(12000);
        avi.setName("Avinash");
        avi.getName();
        avi.printDetails();

        // Problem 2:
        Square s1 = new Square();
        s1.getSide(5);
        // s1.printSquare();
        // s1.printPerimeter();
        System.out.println("The area of square is: " + s1.printArea());
        System.out.println("The perimeter of square is: " + s1.printPerimeter());

        // Problem 3:
        Rectangle r1 = new Rectangle();
        r1.length = 4;
        r1.width = 3;
        System.out.println("The area of rectangle is: " + r1.printArea());
        System.out.println("The perimeter of rectangle is: " + r1.printPerimeter());

         // Problem 4:
        Tommy t1 = new Tommy();
        t1.tommyIsFiring();
        t1.tommyIsRunning();
        t1.tommyIsHitting();
         */
        Circle c1 = new Circle();
        c1.radius = 3;
        System.out.println(c1.printArea());
        System.out.println(c1.printPerimeter());
    }

}
