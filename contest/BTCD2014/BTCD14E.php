<?php require("../../includes/header.php"); ?><h1>Sherlock In Thuvax</h1><div class="content">
<p> </p>
<p>Sherlock works as a spy in the country of Thuvaks. Thuvaks has <strong>N</strong> cities. All roads in Thuvaks are bidirectional and have a positive length. To add to the already existing overwhelming misery  of Thuvaksian citizens, the recent floods have destroyed several roads in the country such that there is only one simple path between every pair of cities.</p>
<p>Sherlock has an assignment. Everyday he starts from a city in the morning and has to travel to all other cities by evening. He must do this repeatedly for <strong>K</strong> days. The starting city for the first day is <strong>A</strong>. The path taken by Sherlock on a particular day is given by a sequence of roads, where each adjacent roads in the sequence is connected to a common city. The total distance of such a path is given by the sum of all the lengths of the roads in the path. The path has to start at a particular city and should cover all the cities. Due to Sherlock's stunning character, people remember him very well. In order to save his cover, he does not want to start the day from the same city more than once. During the night time he travels to the city from where he wants to start the next day of his mission.</p>
<p>Given the description of road network of Thuvaks, length of his mission <strong>K</strong> (in days) and his starting city <strong>A</strong>(1&lt;=A&lt;=N) minimize the sum of the distance he needs to travel during day time over the period of <strong>K</strong> days of his mission.</p>
<p> </p>
<h3>Input</h3>
<p>First line contains three space separated integers <strong>N</strong>, <strong>K</strong> and <strong>A</strong>. Next N-1 lines consists of three space separated integers <strong>X</strong>, <strong>Y</strong> and <strong>C</strong>, implying that the city <strong>X</strong> is connected to city <strong>Y</strong> with a bidirectional road of length <strong>C</strong>.</p>
<p> </p>
<h3>Output</h3>
<p>Print a single line containing the answer ie. the sum of distance he needs to travel during the day time over the period of K days to complete his mission.</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><strong>1</strong> ≤ <strong>N</strong> ≤ <strong>10^5</strong></li>
<li><strong>1</strong> ≤ <strong>K, A, X, Y </strong> ≤ <strong> N</strong></li>
<li><strong>1</strong> ≤ <strong>C</strong> ≤ <strong>10^5</strong></li>
</ul>
<p> </p>
<h3>Example :</h3>
<p>Input :</p>
<p>3 3 1 <br /> 1 2 10 <br /> 1 3 20</p>
<p>Output :</p>
<p>100</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vshriram93">vshriram93</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-03-2014</td>
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