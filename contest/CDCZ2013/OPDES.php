<?php require("../../includes/header.php"); ?><h1>Optimal Destruction</h1><div class="content">
<p>The sudden outburst of dust particles in the universe is causing serious concerns as they are moving towards our planet. The responsibility to save the planet is bestowed upon the local chef. The chef has to his disposal a destroyer missile which has the capacity to destroy a certain number of dust particles. The universe is divided into zones and a destroyer can attack a zone atmost once.</p>
<p>However the destroyer works in a peculiar manner. Every time the destroyer is used to destroy certain number of dust particles it needs certain amount of time to regain its full capacity which is determined by a function 'f'. Where the capacity of the destroyer at time 'j', given that it was triggered last at time 'i' (j &gt; i) is given by f(j-i), which essentially represents the number of dust particles that can be destroyed given this scenario.</p>
<p>Every zone can only be attacked at a particular time instant 'i'. If the chef were to attack zone 'i' then the total number of dust particles destroyed will be the min(dust_particles_in_zone_j, f(j-i)), where time 'i' is the last time the destroyer was used. </p>
<p>The local chef has reached out to you for help. Given the number of dust particles in every zone along with the function 'f', your task is to identify the maximum number of dust particles that can be destroyed by the local chef. </p>
<h3>Input</h3>
<p>The first line of the input consists of an integer <b>T</b>, representing the total number of test cases.</p>
<p>Every test case consists of 3 lines. The first line contains a number <b>N</b>, representing the total number of zones.</p>
<p>The following line contains <b>N</b> integers<b>s_1, s_2, ..., s_N</b>, where <b>s_i</b> represents the number of dust particles in the <b>i_th</b> zone.</p>
<p>The next line also contains <b>N</b> integers <b>f_1, f_2, ..., f_N</b>, where <b>f</b> represents the destroyer missile and <b>f_i</b> represents the total capacity of destruction, the number of dust particles that can be destroyed by the destroyer being triggered after <b>'i'</b> seconds of the destroyer's previous use.</p>
<h3>Output</h3>
<p>For every test case output a number, i.e., the maximum number of dust particles that can be destroyed by using the destroyer optimally.</p>
<h3>Constraints</h3>
<p><b>1</b> &lt;= <b>T</b> &lt;= <b>50</b></p>
<p><b>1</b> &lt;= <b>N</b> &lt;= <b>2000</b></p>
<p><b>1</b> &lt;= <b>s_i</b> &lt;= <b>1000</b></p>
<p><b>1</b> &lt;= <b>f_i</b> &lt;= <b>1000</b></p>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>

2
4
10 20 4 2
1 8 1 12
1
4
10

<b>Output:</b>

10
4

</pre><p> </p>
<h3>Explanation</h3>
<p>In the first test case the optimal scenario is when the destroyer is triggered at time=2 and time=4, as then the destroyer's capacity is 10, as min(8, 20)=8 and min(2,12)=2, 8+2=10 dust particles can be destroyed. Any other sequence of triggers results in the number of dust particles destroyed less than 10. </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kushagra_om">kushagra_om</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-11-2013</td>
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