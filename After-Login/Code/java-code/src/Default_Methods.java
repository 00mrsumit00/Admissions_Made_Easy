interface Camera{
    void takeSnap();
    void recordVideo();
    private void greet(){
        System.out.println("Good Morning");
    }
    default void record4KVideo(){
        greet();
        System.out.println("Recording video in 4K...");
    }
}
interface Wifi{
    String [] networkList();
    String network(String network);
}
class CellPhone{
    void calling(String phoneNumber){
        System.out.println("Calling... " + phoneNumber);
    }
    void pickCall(){
        System.out.println("Ringing...");
    }
}
class MySmartPhone extends CellPhone implements Camera , Wifi{
    public void takeSnap(){
        System.out.println("Taking snap...");
    }
    public void recordVideo(){
        System.out.println("Recording video...");
    }
    public String [] networkList(){
        String users [] = {"Avinash , Vishal , Omkar"};
        return users;
    }
    public String network(String networkName){
        return networkName;
    }
//    public void record4KVideo(){      --> We can override default methods
//        System.out.println("Take snaps and record videos in 4K...");
//    }
}
public class Default_Methods {
    public static void main(String[] args) {
        MySmartPhone s1 = new MySmartPhone();
        // s1.greet(); --> We can not access private method of interfaces
        s1.record4KVideo();
        s1.takeSnap();
        s1.recordVideo();
        System.out.println("Network Name: " + s1.network("LAN-Dccl"));
        System.out.print("The users of S1 smartphone are: ");
        for (String user:s1.networkList()) {
            System.out.println(user);
        }
        s1.calling("+91 7420059805");
        s1.pickCall();
    }
}
