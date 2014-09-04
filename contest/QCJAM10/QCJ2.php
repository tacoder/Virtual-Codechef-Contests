<?php require("../../includes/header.php"); ?><h1>ROAD BOMBING</h1><div class="content">

<p>There is a war going on between two countries and the enemy of your country depends heavily on the transportation of Weapons between two strategic points A and B. Point A and point B along with other points (C,D, etc... ) are connected by a network of roads. Disrupting all traffic between points A and B will give your country sufficient time to gather valuable resources. Since your country has only one bomb left you can only destroy one road. Your Mission should you choose to accept it is to identify all roads that may be destroyed in order to restrict all traffic between the points A and B. The Enemy has nearly destroyed us and hence if we are to win this war then finding that road is critical.</p>
<h3>Input</h3>
<p>In the input each point is identified by a single upper-case alphabet ( maximum of 26 ).Each line of input identifies a pair of points connected by a road. Input ends with the line containing the string "END" (quotes for clarity). All roads are bi-directional and more over there is at most one road between any two points.</p>
<h3>Output</h3>
<p>Output all roads such that blowing any one of them will halt all traffic between points A and B. Note that the roads should be sorted according to order in which they are listed in the input (Check sample test case).<br />
If no such road exists then output should be "Too Bad, We Lose" (quotes for clarity).</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
AC
AD
AE
CE
CF
ED
GF
BG
HB
GH
END


<b>Output:</b>
CF
GF

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/abhijith">abhijith</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>29-01-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
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