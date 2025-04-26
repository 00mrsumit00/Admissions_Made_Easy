class MyNewThread extends Thread{
    public void run(){
        int i = 0;
        while(i<100){
            System.out.println("Hello, I am a software developer");
            try {
                Thread.sleep(450); // slow down the process to 450 milliseconds
            } catch (InterruptedException e) {
                throw new RuntimeException(e);
            }
            i++;
        }
    }
}
class MyNewThread2 extends Thread{
    public void run(){
        int i = 0;
        while (i<100){
            System.out.println("I,m in run method");
            i++;
        }
    }
}
public class Thread_Methods {
    public static void main(String[] args) {
        MyNewThread m1 = new MyNewThread();
        MyNewThread2 m2 = new MyNewThread2();
        m1.start();
        try {
            m1.join();
        }
        catch (Exception e){
            System.out.println(e);
        }
        m2.start();

    }
}
