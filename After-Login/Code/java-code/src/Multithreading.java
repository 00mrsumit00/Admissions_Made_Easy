class Multithread1 extends Thread{
    public void run(){
        int i = 0;
        while(i<50){
            System.out.println("Hi my name is Avinash");
            i++;
        }
    }
}
class Multithread2 extends Thread{
    public void run(){
        int i = 0;
        while(i<50){
            System.out.println("Hi my name is Vishal");
            i++;
        }
    }
}
class Multithread3 extends Thread{
    public void run(){
        int i = 0;
        while(i<50){
            System.out.println("Hi my name is Mayur");
            i++;
        }
    }
}
public class Multithreading {
    public static void main(String[] args) {
        Multithread1 m1 = new Multithread1();
        Multithread2 m2 =new Multithread2();
        Multithread3 m3 = new Multithread3();
        m1.start();
        m2.start();
        m3.start();
    }
}
