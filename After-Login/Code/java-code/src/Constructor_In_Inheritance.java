class Base1{
    Base1(){
        System.out.println("I am in base class constructor");
    }
    Base1(int x){
        System.out.println("The value of x is: " + x);
    }
}
class Derived1 extends Base1{
    Derived1(){
        System.out.println("I am in derived class constructor");
    }
    Derived1(int a,int b){
        super(a);
        System.out.println("The value of x is: " + a + " and y is: " + b);
    }
}
class ChildOfDerived extends Derived1{
    ChildOfDerived(){
        System.out.println("I am in ChildOfDerived class constructor");
    }
    ChildOfDerived(int x,int y,int z){
        super(x,y);
        System.out.println("The value of z is: " + z);
    }
}
public class Constructor_In_Inheritance {
    public static void main(String[] args) {
        // Base1 b = new Base1();
        // Derived1 d = new Derived1();
        ChildOfDerived c = new ChildOfDerived(10,12,16);
    }
}
