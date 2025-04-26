abstract class Parent{
    public Parent(){
        System.out.println("I am constructor of Parent class");
    }
    abstract public void greet();
    abstract public void greet2();
}
class Child extends Parent{
    @Override
    public void greet(){
        System.out.println("Good Morning");
    }
    @Override
    public void greet2(){
        System.out.println("Good Afternoon");
    }
}
abstract class Child1 extends Parent{
    public void greeting(){
        System.out.println("I am Good");
    }
}
public class Abstract_Class {
    public static void main(String[] args) {
        // Parent p = new Parent();   --> Cannot create object of abstract class
            Child c = new Child();
            c.greet();
            c.greet2();

    }
}
