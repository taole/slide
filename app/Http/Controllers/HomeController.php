<?php namespace App\Http\Controllers;

use App\User;
use App\Lib\Template\Saler;
use App\Lib\Template\Manager;
use App\Lib\Template\Probationary;

class HomeController extends Controller {

	private $user, $saler;
	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct( User $user)
	{
		$this->user  = $user;	
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('home');
	}

	public function salerSalary(Saler $saler)
	{
		//dd($this->user)
		$coefficient = $this->user->getCoefficient();
		$time        = $this->user->getHours();
		$poundage    = $saler->getSales();
		$tpm		 = $coefficient * $time + $poundage;

		echo "<br>          tien 1 gio lam: ".$coefficient .' $';
		echo "<br>              so gio lam: ".$time        .' h';

		echo "<br> thu nhap theo doanh thu: ".    $poundage       .' $';

		echo "<br> thu nhap truoc thue: ". $tpm .' $' ;

		echo "<br>          thue phai dong: ".$saler->getTax()             ." %";
		echo "<br>   thu nhap sau thue: ".$saler->getSalary($this->user).' $';

		//return $saler->getSalary($this->user);
	}

	public function managerSalary(Manager $manager)
	{ 
		$coefficient = $this->user->getCoefficient();
		$time        = $this->user->getHours();
		$poundage    = $manager->getSales();
		$tpm		 = $coefficient * $time + $poundage;

		echo "<br>          tien 1 gio lam: ".$coefficient .' $';
		echo "<br>              so gio lam: ".$time        .' h';

		echo "<br> thu nhap theo doanh thu: ".    $poundage       .' $';

		echo "<br> thu nhap truoc thue: ". $tpm .' $' ;

		echo "<br>          thue phai dong: ".$manager->getTax()             ." %";
		echo "<br>   thu nhap sau thue: ".$manager->getSalary($this->user).' $';

		//return $manager->getSalary($this->user);
	}

	public function probationarySalary(Probationary $probationary)
	{
		$coefficient = $this->user->getCoefficient();
		$time        = $this->user->getHours();
		$poundage    = $probationary->getSales();
		$tpm		 = $coefficient * $time + $poundage;

		echo "<br>          tien 1 gio lam: ".$coefficient .' $';
		echo "<br>              so gio lam: ".$time        .' h';

		echo "<br> thu nhap theo doanh thu: ".    $poundage       .' $';

		echo "<br> thu nhap truoc thue: ". $tpm .' $' ;

		echo "<br>          thue phai dong: ".$probationary->getTax()             ." %";
		echo "<br>   thu nhap sau thue: ".$probationary->getSalary($this->user).' $';

		//return $probationary->getSalary($this->user);
	}

}
