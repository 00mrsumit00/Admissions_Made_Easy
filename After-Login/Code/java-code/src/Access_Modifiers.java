class Demo{
    public int a = 5;
    int b = 6;
    protected int c = 7;
    private int d = 8;
    void meth(){
        System.out.println("A = " + a);
        System.out.println("B = " + b);
        System.out.println("C = " + c);
        System.out.println("D = " + d);
    }
}
public class Access_Modifiers{
    public static void main(String args[]){
        System.out.println("Avinash is working out for chest");
        Demo a1 = new Demo();
        a1.meth();
        System.out.println("--------------------------------------------");
        System.out.println("A = " + a1.a);
        System.out.println("B = " + a1.b);
        System.out.println("C = " + a1.c);
        // System.out.println("D = " + a1.d);
    }
}
