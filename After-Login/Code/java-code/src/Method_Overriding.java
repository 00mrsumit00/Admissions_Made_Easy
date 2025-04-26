class Phone{
    public void on(){
        System.out.println("Switching on the phone");
    }
    public void showTime() {
        System.out.println("It's 4 pm in the afternoon");
    }
}
class SmartPhone extends Phone{
    @Override
    public void on(){               // Overriding method in class Phone
        System.out.println("Switching on the SmartPhone");
    }
    public void playMusic(){
        System.out.println("Playing music...");
    }
}
public class Method_Overriding {
    public static void main(String[] args) {
//      Phone obj = new Phone();
//      obj.on();
//      SmartPhone obj2 = new SmartPhone();
//      obj2.on();

      // Dynamic method dispatch
        Phone obj = new SmartPhone();  // It is allowed ,
/*       1. Here we are using reference of class Phone and creating object of class SmartPhone
            It is called as Dynamic Method Dispatch.
         2. Object created using this technique can call only those method which are overriding methods
            or the methods that are present in Super class.
         3. These objects cannot call those methods which are present in subclass but not in superclass.
 */
        obj.on();        // Calls the overriding method in subclass because it's a object of subclass.
        obj.showTime();  // Can call object of Superclass.
//     obj.playMusic(); // Can not call a method which is only present in subclass and not in superclass
        

    }
}
