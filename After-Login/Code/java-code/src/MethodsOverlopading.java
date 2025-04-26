public class MethodsOverlopading {
    static void greeting(){
        System.out.println("I Love You");
    }
    static void greeting(int x){
        System.out.println("I Love You " + 3000);
    }
    static void greeting(int a ,int b){
        System.out.println("I Love You " + a);
        System.out.println("I Love You " + b);
    }
    public static void main(String[] args) {
        greeting();
        greeting(3000);
        greeting(3000,4000);
    }
}
