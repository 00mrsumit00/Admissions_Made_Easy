class MyThread1 implements Runnable{
    @Override
    public void run(){
        int i = 0;
        while(i<100){
            System.out.println("Hello world");
            i++;
        }
    }
}
class MyThread2 implements Runnable{
    public void run(){
        int i = 0;
        while(i<100){
            System.out.println("Hello Jupiter");
            i++;
        }
    }
}
public class Multithreading2 {
    public static void main(String[] args) {
        MyThread1 bullet1 = new MyThread1();
        Thread gun1 = new Thread(bullet1);

        MyThread2 bullet2 = new MyThread2();
        Thread gun2 = new Thread(bullet2);

        gun1.start();
        gun2.start();
    }
}
