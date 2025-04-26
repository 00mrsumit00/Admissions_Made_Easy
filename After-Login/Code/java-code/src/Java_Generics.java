import java.util.ArrayList;
class MyGeneric<T1>{
    int value;
    private T1 t1;

    public MyGeneric(int value, T1 t1) {
        this.value = value;
        this.t1 = t1;
    }

    public int getValue() {
        return value;
    }

    public T1 getT1() {
        return t1;
    }
}
public class Java_Generics{
    public static void main(String[] args) {
        MyGeneric m1 = new MyGeneric(4,78);
        System.out.println(m1.getValue());
        System.out.println(m1.getT1());
    }
}
