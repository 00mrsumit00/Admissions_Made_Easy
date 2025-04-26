public class This_Keyword {
    // Uses of "this" keyword
    int a;
    This_Keyword(){
        this(7);
        System.out.println("I am in Default constructor");
        System.out.println("A = " + this.a);
    }
    This_Keyword(int a){
        this.a = a;
        this.print();
        System.out.println("I am in Parameterized  constructor");
    }
    public void print(){
        this.display();
        System.out.println("Hello");
    }
    public void display(){
        System.out.println("Good Morning");
    }
    public static void main(String args[]){
        This_Keyword t = new This_Keyword();
    }
}
