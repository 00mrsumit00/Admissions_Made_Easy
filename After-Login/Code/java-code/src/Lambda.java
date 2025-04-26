@FunctionalInterface
interface AnoInterface{
    void meth1();
    // void meth2();
}

public class Lambda {
    public static void main(String[] args) {

        // Anonymous class
//        AnoInterface obj = new AnoInterface() {
//            @Override
//            public void meth1() {
//                System.out.println("I am meth1");
//            }
//
//            @Override
//            public void meth2() {
//                System.out.println("I am meth2");
//            }
//        };
//        obj.meth1();

        // Lambda Expression
        AnoInterface obj = () -> {
            System.out.println("I am method 1");
        };
        obj.meth1();
    }
}
