public class Practice_Set_06 {
    public static void main(String[] args) {
//        // Q1:Create an array of 5 floats and print their sum
//        // float [] marks = new float[5];
          // float [] marks = {76.12f,98.45f,87.56f,73.33f,99.99f};
          // step 1:
//        // float sum = marks[0]+marks[1]+marks[2]+marks[3]+marks[4];
//        // System.out.println("Sum of array elements is: " + sum);

          // step 2:
          // float sum = 0;
//        for(int i = 0;i< marks.length;i++){
//            sum += marks[i];
//        }
//        System.out.println("The sum of array elements is: " + sum);

//        // Step 3:
//          for(float elements:marks){
//              sum += elements;
//          }
//        System.out.println("The sum of array elements is: " + sum);

        // Q2:WAP to check given integer is present in array or not;
//         int [] marks = {100,19,83,76,85};
//         int a =76;
//         boolean isInArray = false;
//         for(int i = 0;i< marks.length;i++){
//            if(a == marks[i]){
//                isInArray=true;
//                break;
//            }
//         }
//        if (isInArray) {
//            System.out.println(a + " is present in array.");
//        }
//        else{
//            System.out.println(a + " is not present in the array.");
//        }

        // Q3:Addition of two 2-D arrays;
//        int [][] mat1 = {{3,6,14},{6,8,3}};
//        int [][] mat2 = {{7,12,1},{4,18,12}};
//        int [][] result = {{0,0,0},{0,0,0}};
//        for(int i = 0;i< mat1.length;i++){
//            for(int j = 0;j<mat1[i].length;j++){
//                result[i][j]=mat1[i][j] + mat2[i][j];
//            }
//        }
//        for(int i = 0;i< mat1.length;i++){
//            for(int j = 0;j<mat1[i].length;j++){
//                System.out.print(result[i][j] + " ");
//            }
//            System.out.println();
//        }

//        // Q4:Reversing an array
//        int [] marks = {4,6,8,3,6,9};
//        int l = marks.length;
//        int n = Math.floorDiv(l,2);
//        int temp;
//        for(int i = 0;i<n;i++){
//            temp = marks[i];
//            marks[i] = marks[l-1-i];
//            marks[l-1-i] = temp;
//        }
//        for(int elements:marks){
//            System.out.print(elements + " ");
//        }

        // Q5: Find maximum array
//        int [] marks = {4,6,7,8,3,6,9};
//        int a = marks[0];
//        for (int i = 0;i< marks.length;i++){
//            if (a<marks[i]){
//                a=marks[i];
//            }
//        }
//        System.out.println("The maximum array is: " + a);

        // Q6:Find minimum array ?
//        int [] marks = {4,6,7,8,3,6,9};
//        int a = marks[0];
//        for (int i = 0;i< marks.length;i++){
//            if (a>marks[i]){
//                a=marks[i];
//            }
//        }
//        System.out.println("The minimum array is: " + a);

        // Q7:Check the array is sorted or not
        int [] marks = {4,6,7,8,9};
        boolean isSorted = true;
        for (int i = 0;i< marks.length-1;i++){
            if (marks[i]>marks[i+1]){
                isSorted = false;
                break;
            }
        }
        if (isSorted){
            System.out.println("Array is sorted");
        }
        else {
            System.out.println("Array is not sorted");
        }
    }
}
