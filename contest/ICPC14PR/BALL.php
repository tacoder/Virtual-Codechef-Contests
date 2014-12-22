<?php require("../../includes/header.php"); ?><h1>Entmoot</h1><div class="content">

<p><html> <body></body></html></p>
<h1 style="font-family: Arial;"><small>ACM International Collegiate     Programming Contest, Asia-Amritapuri Site, 2012</small></h1>
<h2>Entmoot<br /> </h2>
<p> <i>     'Hoo, ho! Good morning, Merry and Pippin!' he boomed, when he saw them. 'You sleep long. I have been many a hundred strides already today. Now we will have a drink, and go to Entmoot.'<br />     'Where is Entmoot?' Pippin ventured to ask.<br />     'Hoo, eh? Entmoot?' said Treebeard, turning round. 'It is not a place, it is a gathering of Ents - which does not often happen nowadays. But I have managed to make a fair number promise to come.'<br /> </i> <br /> Indeed, Entmoot cannot be thought of as any particular place, since where it occurs changes from time to time. The choice of the location however, follows a basic principle: Although the Ents (walking and talking Trees - "shepherds of Fangorn Forest") are by and large not hasty, when it comes to gathering for Entmoot, they would like to choose a location that ensures all the Ents can reach as soon as possible.</p>
<p> Note however, that the speed they can travel varies from Ent to Ent. Also, although Fangorn Forest has dense overgrowth, with regard to the Ents, the forest poses no obstacles.</p>
<p> You are given the locations of <b>N</b> Ents who have agreed to join in for Entmoot, as well as their speeds. You need to find out when Entmoot will occur. Formally, given the <b>(x[i],y[i])</b> along with speed <b>s[i]</b> for each Ent, find the point (X, Y) such that the maximum time taken by any of the Ents to reach (X, Y) is minimized. <b>Output the earliest time</b> when all the Ents can meet. </p>
<h3>Input (STDIN):</h3>

<p> The first line contains <b>T</b>, the number of test cases.<br /> The first line of each test case contains <b>N</b>, the number of Ents.<br /> The next <b>N</b> lines contain three space-separated integers each. The ith of these lines contains : <b>x[i], y[i], s[i]</b>.</p>
<p></p>
<h3>Output (STDOUT):</h3>

<p> Output one line per test case, containing the earliest time when the Ents can meet.<b> Relative and absolute error of 10^-4 are acceptable.</b> </p>
<h3>Constraints:</h3>

<p><b> 1 &lt;= T &lt;= 10<br /> 2 &lt;= N &lt;= 50<br /> -1,000,000 &lt;= x[i], y[i] &lt;= 1,000,000<br /> 1 &lt;= s[i] &lt;= 1,000,000</b></p>
<p></p>
<h3>Sample Input:</h3>

<p> <span style="font-family: Courier New,Courier,monospace;"> 4<br /> 3<br /> 0 3 3<br /> 4 0 4<br /> -3 -4 5<br /> 3<br /> 0 10 2<br /> 0 20 2<br /> 0 40 2<br /> 3<br /> 0 100 15<br /> 0 -100 15<br /> 8 0 7<br /> 3<br /> 0 0 1<br /> 10000 0 1<br /> 5000 8661 1<br /> </span></p>
<h3>Sample Output:</h3>

<p> <span style="font-family: Courier New,Courier,monospace;"> 1.000000<br /> 7.500000<br /> 6.666667<br /> 5773.751357</span></p>
<h3>Notes/Explanation of Sample Input:</h3>

<p>In the first test case, all the ents can meet at origin in 1 unit of time. <br />In the second test case, the first and the third ent reach (25,0) after 7.5 units of ime, whereas the second ent reaches there after 2.5 units of time and waits for the remaining ents to arrive. <br />In the third test case, all the ents can meet at origin in 100/15 units of time. </p>
<p>  </p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-01-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 - 2 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>