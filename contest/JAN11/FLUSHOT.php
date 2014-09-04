<?php require("../../includes/header.php"); ?><h1>Flu Shot Lineup</h1><div class="content">

<p>
A new strain of flu has broken out. Fortunately, a vaccine was developed very quickly and is now being administered to the public. Your local health clinic is administering this vaccine, but the waiting line is very long.</p>
<p>
For safety reasons, people are not allowed to stand very close to each other as the flu is not under control yet. However, many people were not aware of this precaution. A health and safety official recently examined the line and has determined that people need to spread out more in the line so that they are at least T units away from each other. This needs to be done as quickly as possible so we need to calculate the minimum distance D such that it is possible for every person to move at most D units so the distance between any two people is at least T. Specifically, D should be the minimum value such that there are locations x'<sub>i</sub> so that |x<sub>i</sub> - x'<sub>i</sub>| ≤ D for each person i and |x'<sub>i</sub> - x'<sub>j</sub>| ≥ T for any two distinct people i,j. Furthermore, since nobody can move past the receptionist we must also have that x'<sub>i</sub> ≥ 0. </p>
<p>
The location of each person is given by the number of meters they are standing from the receptionist. When spreading out, people may move either forward or backward in line but nobody may move past the location of the receptionist.</p>
<h3>Input</h3>

<p>
The first line of input contains a single integer K ≤ 30 indicating the number of test cases to follow. Each test case begins with a line containing an integer N (the number of people) and a floating point value T (the minimum distance that should be between people). The location of each person i is described by single floating point value x<sub>i</sub> which means person i is x<sub>i</sub> meters from the receptionist. These values appear in non-decreasing order on the following N lines, one value per line.</p>
<p>
Bounds: 1 ≤ N ≤ 10,000 and T and every x<sub>i</sub> is between 0 and 1,000,000 and is given with at most 3 decimals of precision.</p>
<h3>Output</h3>

<p>
For each test case, you should output the minimum value of D with exactly 4 decimals of precision on a single line.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
2 4
1
2
2 2
1
2
4 1
0
0.5
0.6
2.75

<b>Output:</b>
2.0000
0.5000
1.4000

</pre><h3>Explanation of Sample Data</h3>

<p>In the first test case, the first person can move to location 0 and the second to location 4 with the maximum distance moved being 2. In the second case, person 1 can move to location 0.5 and person 2 can move to location 2.5 for a maximum distance moved being 0.5. Finally, in the last output the first person does not move, the second moves to location 1, the third to location 2, and the fourth to location 3. The maximum distance moved by any person was done by the third person who moved 1.4 meters to their destination.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/friggstad">friggstad</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/subra">subra</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-11-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>