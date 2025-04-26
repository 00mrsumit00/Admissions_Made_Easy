class Student{
    int Roll_No;
    int salary;
    String Name;
    public void printDetails(){
        System.out.println("My name is " + Name);
        System.out.println("and my Roll No is " + Roll_No);
    }
    public int getSalary(){
        return salary;
    }

}
public class CustomClass{
    public static void main(String[] args) {
        System.out.println("Object oriented programming ");
        Student avi = new Student();
        Student vishal = new Student();
        // Setting Variables for AVinash
        avi.Name = "Avinash";
        avi.Roll_No = 22368;
        avi.salary = 12000;

        // Setting Variables for Vishal
        vishal.Name = "Vishal";
        vishal.Roll_No = 22316;
        vishal.salary = 8000;

        // Printing data variables
        avi.printDetails();
        System.out.println(avi.getSalary());
        vishal.printDetails();
        System.out.println(vishal.getSalary());
        // System.out.println(avi.Name);
        // System.out.println(avi.Roll_No);
    }
}
