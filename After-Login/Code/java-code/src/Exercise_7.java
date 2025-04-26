import java.util.ArrayList;
import java.util.Scanner;
class Staff{
    int case1(){
        Scanner sc = new Scanner(System.in);
        System.out.println("Log-in Successful");
        System.out.println("What would you like to do ?");
        int choice;
        while (true) {
            System.out.println("1. Add books");
            System.out.println("2. Issue books");
            System.out.println("3. Collect books");
            System.out.println("4. See available books");
            System.out.println("5. Exit");
            choice = sc.nextInt();
            if (choice > 0 && choice < 6) {
                break;
            }
            System.out.println("Please choose a valid choice...");
        }
        return choice;
    }

}
public class Exercise_7 {
    public static int header(){
        System.out.println("Dayanand Education Society Library");
        int choose;
        Scanner sc = new Scanner(System.in);
        while (true) {
            System.out.println("1. Library Staff");
            System.out.println("2. Student");
            System.out.print("You are ");
            choose = sc.nextInt();
            if (choose == 1 || choose == 2) {
                break;
            }
            System.out.println("Enter a valid choice");
        }
        return choose;
    }
    public static void main(String[] args) {
        Staff st = new Staff();
        ArrayList<String> books = new ArrayList<>();
        Scanner sc = new Scanner(System.in);
        int choose = header();
            switch (choose) {
                case 1:
                    int choice = st.case1();
                    switch (choice) {
                        case 1:
                            while (true) {
                                System.out.println("Enter the name of the books you want to add : ");
                                books.add(sc.nextLine());
                                System.out.println("Add more ?(y/n)");
                                String addAgain = sc.next();
                                sc.nextLine();
                                if (!addAgain.equals("y")) {
                                    break;
                                }
                            }
                            st.case1();
                            break;
                        case 2:
                            System.out.println("Which book you want to issue ?");
                            String issuedBook = sc.nextLine();
                            for (String book : books) {
                                if (issuedBook.equals(book)) {
                                    books.remove(book);
                                    System.out.println(issuedBook + " is issued.");
                                    break;
                                } else {
                                    System.out.println(issuedBook + " is not available in Library.");
                                }
                            }
                            break;
                        case 3:
                            System.out.println("Enter the name of the book, taking back...");
                            books.add(sc.nextLine());
                            System.out.println("Book successfully returned");
                            break;
                        case 4:
                            System.out.println("The Available books in library are : ");
                            for (String book : books) {
                                System.out.println(book);
                            }
                            break;
                        case 5:
                            header();
                            break;
                    }
                    break;
                case 2:
                    System.out.println("Log-in Successful");
                    System.out.println("What would you like to do ?");
                    break;
            }
        }
}

