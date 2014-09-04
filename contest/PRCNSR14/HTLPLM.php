<?php require("../../includes/header.php"); ?><h1>Hotel Palama Palace</h1><div class="content">
<h3>Problem description.</h3>
<p>
With the arrival of monsoon season, beautiful city of Palama is observing a huge surge of tourists. As expected, the infamous hotel, Palama Palace - 5 Star Super Luxurious with 7 Swimming Pools, jacuzzi in rooms and what not, has become the main attraction for tourists to stay.
</p>
<p>
Palama Managers believe in providing quality service and will have to compromise on the number of touristers they can fit. Having a lot of pre-bookings, Palama managers have to again and again go through these bookings and see if they can give the room to tourists. Can you help the Palama managers quickly answer tourists if they can provide them a room or not?
</p>
<h3>Input Description</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows<br />
	First line of each test case contains two spaced integers <b>N</b> and <b>Q</b>, where N is the number of time slots which are already booked and Q is the number of queries the managers have got<br /><br />
	<b></b>N lines follow each of which contains two spaced integers representing interval start time <b> Ts</b> and end time <b> Te</b><br /><br />
	<b>Q</b> lines follow each of which contains one integer,<b> Qi</b>,  representing the time of request</p>
<h3>Output Description</h3>
<p>For every query either output "YES" or "NO" according to problem statement
</p>
<h3>Sample Input</h3>
<p>
1<br />3 3<br />1 4<br />5 10<br />8 12<br />3<br />13<br />6<br />
</p>
<h3>Sample Output</h3>
<p>
NO<br />YES<br />NO<br />
</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b> <b>T</b> ≤ <b>10</b></b></li>
<li><b>1</b> ≤ <b> <b>N</b> ≤ <b>5000</b></b></li>
<li><b>1</b> ≤ <b> <b>Ts,Te</b> ≤ <b>10000000000</b></b></li>
<li><b>1</b> ≤ <b> <b>Q</b> ≤ <b>10000</b></b></li>
<li><b>1</b> ≤ <b> <b>Qi</b> ≤ <b>10000000000</b></b></li>
</ul>
<p><b>Note</b>: Intervals are inclusive</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/procon2014">procon2014</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-08-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>