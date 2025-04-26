class Rectangle2{
    public int length;
    public int breadth;
    public int height;

    public void setHeight(int height) {
        this.height = height;
    }
    public void setLength(int length) {
        this.length = length;
    }
    public void setBreadth(int breadth) {
        this.breadth = breadth;
    }
    public int area(){
        return length * breadth;
    }
    public int volume(){
        return length * height * breadth;
    }
}
class Cuboid extends Rectangle2{
        public int surface_Area(){
            return 2 * length * breadth + 2 * length * height + 2 * height * breadth;
        }
        public int volumeOfCuboid(){
            return length * breadth * height;
        }
}
public class Practice_Set_11 {
    public static void main(String[] args) {
        Cuboid c  = new Cuboid();
        c.setLength(8);
        c.setBreadth(4);
        c.setHeight(6);
        System.out.println("The area of rectangle is: " + c.area());
        System.out.println("The volume of rectangle is: " + c.volume());
        System.out.println("The surface area of cuboid: " + c.surface_Area());
        System.out.println("The volume of cuboid: " + c.volumeOfCuboid());
    }
}
