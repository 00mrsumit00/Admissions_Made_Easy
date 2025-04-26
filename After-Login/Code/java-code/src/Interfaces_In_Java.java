interface Bicycle{
    int speed = 20;
    void speedUp(int increment);
    void applyBreak(int decrement);
}
interface BlowHorn{
    void blowHornmhn();
    void blowHornK3g();
}
class AvonCycle implements Bicycle , BlowHorn{
    public void speedUp(int increment){
        System.out.println("Speeding up...");
    }
    public void applyBreak(int decrement){
        System.out.println("Applying break...");
    }
    public void blowHornmhn(){
        System.out.println("Main hoon na");
    }
    public void blowHornK3g(){
        System.out.println("Kabhi khushi kabhi gum");
    }
}
public class Interfaces_In_Java{
    public static void main(String[] args) {
        AvonCycle cycle1 = new AvonCycle();
        cycle1.speedUp(30);
        cycle1.applyBreak(15);
        // We can create and access the properties of interfaces
        System.out.println(cycle1.speed);
        // We can not modify the properties of interface
        // cycle1.speed = 45;
        cycle1.blowHornmhn();
        cycle1.blowHornK3g();
    }
}
