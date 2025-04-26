class Cylinder{
    private int radius;
    private int height;
    private float pi = 3.14f;

    public Cylinder(int radius, int height) {
        this.radius = radius;
        this.height = height;
    }

    public void setRadius(int r){
        this.radius = r;
    }
    public int getRadius(){
        return radius;
    }
    public void setHeight(int h){
        this.height = h;
    }
    public int getHeight(){
        return height;
    }
    public float getSurfaceArea(){
        return 2 * pi * radius * height + 2 * pi * radius * radius;
    }
    public float getVolume(){
        return pi * radius * radius * height;
    }
}
class Rectangle1{
    private int length;
    private int breadth;

    public Rectangle1() {
        this.length = 4;
        this.breadth = 5;
    }
    public Rectangle1(int length, int breadth) {
        this.length = length;
        this.breadth = breadth;
    }
    public int area(){
        return length * breadth ;
    }
}
class Sphere{
    private int radius;

    public void setRadius(int radius) {
        this.radius = radius;
    }
    public int getRadius() {
        return radius;
    }
    public float area(){
        return 4 * 3.14f * radius * radius;
    }
    public float volume(){
        return (3.14f * radius * radius * radius) * 4/3;
    }
}
public class Practice_Set_09 {
    public static void main(String[] args) {
        /*
        // Problem 1.
        Cylinder c1 = new Cylinder(4,7);
        // c1.setRadius(5);
        c1.getRadius();
        // c1.setHeight(8);
        c1.getHeight();
        System.out.println("The radius of cylinder is: " + c1.getRadius());
        System.out.println("The height of cylinder is: " + c1.getHeight());

        // Problem 2.
        System.out.println("The surface area of cylinder is: " + c1.getSurfaceArea());
        System.out.println("The volume of cylinder is: " + c1.getVolume());

        // Problem 4.
        Rectangle1 r1 = new Rectangle1(3,7);
        System.out.println("The area of rectangle is: " + r1.area());
        */

        // Problem 5.
        Sphere s1 = new Sphere();
        s1.setRadius(5);
        System.out.println("The radius of sphere is: " + s1.getRadius());
        System.out.println("The surface area of sphere is: " + s1.area());
        System.out.println("The volume of sphere is: " + s1.volume());
    }
}
