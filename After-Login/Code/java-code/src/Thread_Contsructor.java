class MyThr extends Thread{
    public MyThr(String name){
        super(name);
    }
//    public void run(){
//        System.out.println("Hello everyone, I'm a software developer");
//    }
}
public class Thread_Contsructor {
    public static void main(String[] args) {
        MyThr m1 = new MyThr("Avinash");
        MyThr m2 = new MyThr("Vihsal");
        m1.start();
        m2.start();
        System.out.println("The ID of my Thread is: " + m1.getId());
        System.out.println("The name of my Thread is: " + m1.getName());
        System.out.println("The ID of my Thread is: " + m2.getId());
        System.out.println("The name of my Thread is: " + m2.getName());
    }
}
