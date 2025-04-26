class Circle1{
    public int radius;
    Circle1(int r) {
        this.radius = r;
    }
    public double area(){
        return Math.PI*radius*radius;
    }
}
class Cylinder1 extends Circle1{
    public int height;
    Cylinder1(int r,int height) {
        super (r);
        this.height = height;
    }
    public double volume(){
        return Math.PI*radius*radius*height;
    }
}
public class Practice_Set_10 {
    public static void main(String[] args) {
        // Circle1 c = new Circle1();
        Cylinder1 cl = new Cylinder1(4,8);
        System.out.println("The volume of cylinder is: " + cl.volume());
        System.out.println("The area of circle is: " + cl.area());

    }
}
