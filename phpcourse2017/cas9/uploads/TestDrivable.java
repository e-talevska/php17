package sixthClass;

public class TestDrivable {

	public static void main(String[] args) {

		Bike[] drivableThings = new Bike[3];
		drivableThings[0] = new RoadBike("Black", 2, 500);
		drivableThings[1] = new MountainBike("Black", 2, 500);
		drivableThings[2] = new SprintBike ("Black", 2, 700);

		Driver.drive(drivableThings);
		Driver.stop(drivableThings);
		Bike[] bikes = new Bike[2];
		Driver.drive(drivableThings);






	}


}


