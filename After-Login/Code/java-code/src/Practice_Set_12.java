abstract class Pen{
    abstract void write();
    abstract void refill();
}
class FountainPen extends Pen{
    void write(){
        System.out.println("I am writing");
    }
    void refill(){
        System.out.println("I am refilling");
    }
    void changeNib(){
        System.out.println("Changing the nib of pen");
    }

}
class Monkey{
    void jump(){
        System.out.println("Monkey is jumping");
    }
    void bite(){
        System.out.println("Monkey is biting");
    }
}
interface Evo{
    void eat();
    void sleep();
}
class Human extends Monkey implements Evo{
    public void eat(){
        System.out.println("Humans eat");
    }
    public void sleep(){
        System.out.println("Humans sleep");
    }
}
abstract class Telephone{
    abstract void ring();
    abstract void pick();
    abstract void disconnect();
}
class SmartTelephone extends Telephone{
    void ring(){
        System.out.println("Telephone is ringing...");
    }
    void pick(){
        System.out.println("Picking up the call...");
    }
    void disconnect(){
        System.out.println("Disconnect the call...");
    }
}
interface TvRemote{
    void changeChannel();
    void volumeUp();
    void volumeDown();
}
interface SmartTvRemote extends TvRemote{
    void voiceAccess();
    void connectToPhone();
}
class TV implements SmartTvRemote{
    public void changeChannel(){
        System.out.println("Changing the channel");
    }
    public void volumeUp(){
        System.out.println("Volume up");
    }
    public void volumeDown(){
        System.out.println("Volume down");
    }
    public void voiceAccess(){
        System.out.println("activate Voice Access...");
    }
    public void connectToPhone(){
        System.out.println("Connecting to the phone");
    }
}
public class Practice_Set_12{
    public static void main(String[] args) {
        // Q1 + Q2
//        FountainPen p1 = new FountainPen();
//        p1.refill();
//        p1.changeNib();
//        p1.write();
//
//        // Using reference of abstract class and creating object of class
//        Pen p2 = new FountainPen();
//        p2.write();
//        p2.refill();

        // Q3
        Human obj = new Human();
        obj.jump();
        obj.bite();
        obj.eat();
        obj.sleep();
        // Creating objects using references
        // Q5 --> Polymorphism
        Monkey obj2 = new Human();
        Evo obj3 = new Human();

        // Q4.
        SmartTelephone s1 = new SmartTelephone();
        s1.ring();
        Telephone t1 = new SmartTelephone();
        t1.disconnect();

        // Q6.
        TV sam = new TV();
        sam.changeChannel();
        sam.voiceAccess();

        SmartTvRemote lg = new TV();
        lg.connectToPhone();
        lg.voiceAccess();
        lg.changeChannel();
        lg.volumeUp();
        lg.volumeUp();

        TvRemote xi = new TV();
        xi.changeChannel();
        xi.volumeDown();
        xi.volumeUp();

    }
}
