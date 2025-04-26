public class Multi_Dimensional_Array {
    public static void main(String[] args) {
       int [][][] sections = new int [2][3][2];
       sections [0][0][0]=101;
       sections [0][0][1]=102;
       sections [0][1][0]=103;
       sections [0][1][1]=104;
       sections [0][2][0]=105;
       sections [0][2][1]=106;

       sections [1][0][0]=201;
       sections [1][0][1]=202;
       sections [1][1][0]=203;
       sections [1][1][1]=204;
       sections [1][2][0]=205;
       sections [1][2][1]=206;

       System.out.println("Total array elements: "+sections.length*sections[0].length* sections[0][0].length);
       for(int i = 0;i< sections.length;i++){
          for(int j = 0;j< sections[i].length;j++){
             for(int k = 0;k< sections[i][j].length;k++){
                System.out.print(sections[i][j][k]);
                System.out.print(" ");
             }
             System.out.print("   ");
          }
          System.out.println();
       }
    }
}
