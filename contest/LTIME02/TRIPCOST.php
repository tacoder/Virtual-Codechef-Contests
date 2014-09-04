<?php require("../../includes/header.php"); ?><h1>Optimal Trip</h1><div class="content">
<p>Chef has decided to take a break, and go for a ride. He is currently in city <b>0</b>, and he wants to get to city <b>N</b>.<br /> The cities along the road from <b>0</b> to <b>N</b> are numbered <b>0, 1, 2, 3, ... N-1, N</b> in increasing order of distance from city <b>0</b>.<br /> The distance between cities <b>i</b> and <b>i-1</b> is denoted by <b>d<sub>i</sub></b>.</p>
<p>However, as is always the case, it is unsafe to travel at night, so he will have to break his journey over multiple days.<br /> Chef may travel at most <b>D</b> distance in any day, so he will have to book hotel for overnight stay in some of the cities.<br /> On any day, Chef will begin his journey from some city and end his journey at some other city.<br /> Chef wants to reach city <b>N</b> in as few days as possible, so he has to plan his trip accordingly.<br /> Let <b>L</b> be the minimum number of days in which he can reach city <b>N</b>.</p>
<p>Chef knows the cost of overnight stay in each city. The cost of overnight stay in city <b>i</b> is <b>c<sub>i</sub></b>.<br /> Chef will need to get all his hotel bills re-embersed, and his boss might get suspicious if cost for any single day exceeds a threshold.</p>
<p>Chef knows that his boss wants him to reach as soon as possible. Thus, if it is possible for Chef to go from <b>0</b> to <b>N</b> in <b>L</b> days with no restriction on where Chef stays, then his boss will want him to reach in exactly <b>L</b> days. However, if the boss puts a threshold value <b>i</b> then we know that the Chef may not be able to reach in <b>L</b> days (since he may not be allowed to stay at some hotels). Help him him find the minimum threshold value <b>C</b> such that if he only stays in hotels of cost &lt;= <b>C</b>, it is possible for him to reach the destination <b>N</b> in exactly <b>L</b> days (remember, here <b>L</b> is the minimum number of days needed by Chef if there were absolutely no restrictions on where he stays).</p>
<p>Formally, let <b>L</b> be the minimal number of days it takes Chef to get from city <b>0</b> to city <b>N</b>. Let <b>F(i)</b> be the minimal number of days it takes Chef to get from city <b>0</b> to city <b>N</b> if it's not allowed to pay more than <b>i</b> for a single stay in hotel. Find the smallest <b>C</b> that will still allow Chef to get to city <b>N</b> without losing time. In other words <b>F(C)=L</b>. Find and output <b>L</b> as well.</p>
<p> </p>
<h3>Input</h3>
<p> </p>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.<br /> The first line of each test case has two space separated integers <b>N</b> and <b>D</b>.<br /> <b>N</b> lines follow, each having two space separated integers, <b>d<sub>i</sub></b> and <b>c<sub>i</sub></b>.</p>
<h3>Output</h3>
<p>For each test case, output a separate line containing the values of <b>L</b> and <b>C</b>.</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T </b>≤ 15 </li>
<li>2 ≤ <b>N</b> ≤ 10<sup>5</sup> </li>
<li>1 ≤ <b>D</b> ≤ 10<sup>9</sup> </li>
<li>1 ≤ <b>d<sub>i</sub></b> ≤ <b>D</b></li>
<li>1 ≤ <b>c<sub>i</sub></b> ≤ <b>N</b></li>
<li>The sum of <b>N</b> over all test cases in any file is at most <b>4*10<sup>5</sup></b>.</li>
</ul>
<p> </p>
<p> </p>
<h3>Subtack 1 (30 points)</h3>
<p> </p>
<p><b>N</b> ≤ 10<sup>3</sup></p>
<p> </p>
<h3>Subtack 2 (30 points)</h3>
<p> </p>
<p><b>d<sub>i</sub></b> = 1, <b>D</b> = 9</p>
<p> </p>
<h3>Subtask 3 (40 points):</h3>
<p> </p>
<p><i> No special constraints </i></p>
<p> </p>
<p>Example:</p>
<h3>Sample Input</h3>
<p>2<br /><br /> 4 5<br /><br /> 2 4<br /><br /> 1 2<br /><br /> 3 3<br /><br /> 1 1<br /><br /> 5 6<br /><br /> 2 1<br /><br /> 4 4<br /><br /> 2 2<br /><br /> 2 3<br /><br /> 4 5<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /></p>
<h3>Sample output</h3>
<p>2 2<br /><br /> 3 2<br /><br /><br /></p>
<h3>Explanation</h3>
<p>For test case# 1, the optimal trip is <b>0</b> → <b>2</b> → <b>4</b><br /><br /> For test case# 2, the optimal trip is <b>0</b> → <b>1</b> → <b>3</b> → <b>5</b><br /><br /><br /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/utkarsh_lath">utkarsh_lath</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/Rubanenko‎">Rubanenko‎</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-07-2013</td>
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