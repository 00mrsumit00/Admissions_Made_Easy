class MyThr1 extends Thread{
    public MyThr1(String name){
        super(name);
    }
    public void run() {
        int i = 0;
        while (i < 100) {
            System.out.println("The name of Thread is: " + this.getName());
            i++;
        }
    }
}
public class Thread_Priorities {
    public static void main(String[] args) {
        MyThr1 m1 = new MyThr1("Avinash");
        MyThr1 m2 = new MyThr1("Vihsal");
        MyThr1 m3 = new MyThr1("Vihsal");
        MyThr1 m4 = new MyThr1("Vihsal");
        MyThr1 m5 = new MyThr1("Vihsal");
        m1.setPriority(Thread.MAX_PRIORITY);
        m2.setPriority(Thread.MIN_PRIORITY);
        m3.setPriority(Thread.MIN_PRIORITY);
        m4.setPriority(Thread.NORM_PRIORITY);
        m5.setPriority(Thread.NORM_PRIORITY);
        m2.start();
        m3.start();
        m4.start();
        m5.start();
        m1.start();

    }
}
