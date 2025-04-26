class Base{
    int x;

    public int getX() {
        System.out.println("Im in Base class and setting X");
        return x;
    }

    public void setX(int x) {
        this.x = x;
    }
}
class Derived extends Base{
    int y;

    public int getY() {
        System.out.println("Im in Derived class and setting value of Y");
        return y;
    }

    public void setY(int y) {
        this.y = y;
    }
}
public class Inheritance {
    public static void main(String[] args) {
        // Creating object of Base class
        Base b = new Base();
        b.setX(6);
        System.out.println(b.getX());

        // Creating object of Derived class
        Derived d = new Derived();
        d.setX(8);
        System.out.println(d.getX());
        d.setY(45);
        System.out.println(d.getY());
    }
}
