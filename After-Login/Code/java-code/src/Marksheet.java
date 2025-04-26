class Heading {
    int marks[] = new int[7];
    final int totalMarks = 100;
    final int totalMarksInPractical = 50;
    final int total = (totalMarks * 5) + (totalMarksInPractical * 2);
    boolean kt;
    java.util.Scanner sc = new java.util.Scanner(System.in);

    void printline() {
        System.out.println("\n--------------------------------------------------------------");
    }

    void printline2() {
        System.out.println("==============================================================");
    }

    void universityName() {
        this.printline2();
        System.out.println("SWAMI RAMANAND TEERTH MARATHWADA UNIVERSITY,NANDED - 431 606");
        System.out.println("\t\t\t\tMAHARASHTRA STATE, INDIA");
        System.out.println("\t\t\t\t\tSTATEMENT OF MARKS\t\tSR.NO.:CP-0103322");
        this.printline2();
    }

    void examination() {
        System.out.println("EXAMINATION : BACHELOR OF COMPUTER APPLICATION SECOND YEAR");
        System.out.println("COLLEGE NAME : DAYANAND COLLEGE OF COMMERCE, LATUR");
        System.out.println("SEAT NO : ZH13492\t\t\t\t\t\tCOLLEGE CODE: 302");
        System.out.println("NAME: VANGE AVINASH INDRAJEET");
        System.out.println(("--------------------------------------------------------------"));
    }

    void enterMarks() {
        System.out.print("Enter your marks in JAVA              : ");
        marks[0] = sc.nextInt();
        System.out.print("Enter your marks in RDBMS             : ");
        marks[1] = sc.nextInt();
        System.out.print("Enter your marks in Data Structure    : ");
        marks[2] = sc.nextInt();
        System.out.print("Enter your marks in Computer Graphics : ");
        marks[3] = sc.nextInt();
        System.out.print("Enter your marks in Logical Reasoning : ");
        marks[4] = sc.nextInt();
        System.out.print("Enter your marks in JAVA practical    : ");
        marks[5] = sc.nextInt();
        System.out.print("Enter your marks in RDBMS practical   : ");
        marks[6] = sc.nextInt();
    }

    void struct() {
        System.out.print("SUBJECT\t\t\t  |\tTOTAL MARKS\t|\tOBTAINED MARKS\t|  GRADE |");
        printline();
        System.out.printf("JAVA\t\t\t  |\t\t%d\t\t|\t\t  %d\t\t|\t "+ this.grade(marks[0])+"   |", totalMarks, marks[0]);
        printline();
        System.out.printf("RDBMS\t\t\t  |\t\t%d\t\t|\t\t  %d\t\t|\t "+ this.grade(marks[1])+"   |", totalMarks, marks[1]);
        printline();
        System.out.printf("Data Structure\t  |\t\t%d\t\t|\t\t  %d\t\t|\t "+ this.grade(marks[2])+"   |", totalMarks, marks[2]);
        printline();
        System.out.printf("Computer Graphics | \t%d\t\t|\t\t  %d\t\t|\t "+ this.grade(marks[3])+"   |", totalMarks, marks[3]);
        printline();
        System.out.printf("Logical Reasoning | \t%d\t\t|\t\t  %d\t\t|\t "+ this.grade(marks[4])+"   |", totalMarks, marks[4]);
        printline();
        System.out.printf("JAVA practical\t  | \t%d\t\t|\t\t  %d\t\t|\t "+ this.gradeOfPractical(marks[5])+"   |", totalMarks, marks[5]);
        printline();
        System.out.printf("RDBMS practical\t  | \t%d\t\t|\t\t  %d\t\t|\t "+ this.gradeOfPractical(marks[6])+"   |", totalMarks, marks[6]);
        printline();
        System.out.printf("TOTAL MARKS ->\t  | \t%d\t\t|\t\t  %d \t\t|\t\t |", total, totalObt());
        printline();
        result();
        printline();
    }

    int totalObt() {
        int sum = 0;
        for (int elements : marks) {
            sum += elements;
        }
        return sum;
    }

    void result() {
        float percentage = (float) totalObt() / 6;
        System.out.print("RESULT: \t");
        for(int ele:marks){
            if(ele<40) kt = true;
        }
        if(kt){
            System.out.println("ATKT");
        }
        else if (percentage >= 40) {
            System.out.println("PASS");
        } else {
            System.out.println("FAIL");
        }
        System.out.print("PERCENTAGE: " + percentage);
    }

    char grade(int a) {
        if (a >= 90) return 'O';
        else if (a >= 80) return 'A';
        else if (a >= 70) return 'B';
        else if (a >= 60) return 'C';
        else if (a >= 50) return 'D';
        else if (a >= 35) return 'E';
        else return 0;
    }
    char gradeOfPractical(int a){
        if(a>=45) return 'A';
        else if (a>=40) return 'B';
        else if (a>=35) return 'C';
        else if (a>=30) return 'D';
        else if (a>=25) return 'E';
        else  return 'F';
    }

}
public class Marksheet {
    public static void main(String[] args) {
        Heading h1 = new Heading();
        h1.enterMarks();
        h1.universityName();
        h1.examination();
        h1.struct();
    }
}
