class PrThread extends Thread {
    public void run() {
        int i = 0;
        while (i<100) {
            System.out.println("Good Morning");
            i++;
        }
    }
}
class PrThread2 extends Thread{
    public void run(){
        int i = 0;
        while (i<100) {
            try{
                Thread.sleep(400);
            }
            catch (Exception e){
                System.out.println(e);
            }
            System.out.println("Wel-Come");
            i++;
        }
    }
}
public class Practice_Set_13 {
    public static void main(String[] args) {
        PrThread p1 = new PrThread();
        PrThread2 p2 = new PrThread2();
        p1.start();
        // p2.start();
        System.out.println(p1.getState());
    }
}
