
import java.util.Scanner;

public class Example {
	private static Scanner sc;
	public static void main(String[] args) {
		int x, y, z;
		
		sc = new Scanner(System.in);	
		
		System.out.println("Please Enter three Numbers: ");
		x = sc.nextInt();
		y = sc.nextInt();
		z = sc.nextInt();
		
		if (x - y < 0 && x - z < 0) {
			System.out.format("\n%d is Lesser Than both %d and %d", x, y, z);
		}
		else {
			if (y -z < 0) {
				System.out.format("\n%d is Lesser Than both %d and %d", y, x, z);
			}
			else {
				System.out.format("\n%d is Lesser Than both %d and %d", z, x, y);
			}
		}
	}
}
Please Enter three Nu
