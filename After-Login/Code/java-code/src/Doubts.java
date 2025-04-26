interface Some{
    void Study();
    void Gym();
    private void Swimming(){
        System.out.println("I am private method of interface");
    }
    default void print(){
        System.out.println("I am default method of interface");
    }
}
abstract class Modes{
    Modes(){
        System.out.println("I am constructor of Modes class");
    }
    void startMode(){
        System.out.println("Start the Gaming mode");
    }
    abstract void activateGamingMode();
    abstract void voiceChanger();
}
class Modify extends Modes{
    Modify(){
        System.out.println("I am constructor of Modify class");
    }
    @Override
    void activateGamingMode() {
        System.out.println("Activating Gaming Mode");
    }
    @Override
    void voiceChanger() {
        System.out.println("Activating Voice Changer");
    }
}
class Normal implements Some{
    public void Study(){
        System.out.println("I am studying");
    }
    public void Gym(){
        System.out.println("I am going to Gym");
    }
}
public class Doubts {
    public static void main(String[] args) {
        // We can create object of abstract class by implementing its methods as shown below:
//        Modes m1 = new Modes() {
//            @Override
//            void activateGamingMode() {
//                System.out.println("Activating Gaming Mode");
//            }
//            @Override
//            void voiceChanger() {
//                System.out.println("Activating Voice Changer");
//            }
//        };

//       Modes m1 = new Modify();
//       m1.activateGamingMode();
//       m1.startMode();
//       m1.voiceChanger();

//       Normal n1 = new Normal();
//       n1.Gym();
//       n1.print();
//       n1.Study();

        Modes m2 = new Modify();

        // We can create object of an interface by implementing its methods:
//        Some s1 = new Some() {
//            @Override
//            public void Study() {
//                System.out.println("I am studying");
//            }
//            @Override
//            public void Gym() {
//                System.out.println("I am going to Gym");
//            }
//        };

        Normal n1 = new Normal();
        n1.Study();
        n1.Gym();
        n1.print();
    }
}
