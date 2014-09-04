<?php require("../../includes/header.php"); ?><h1>The Fire Rises !</h1><div class="content">

<p>James Moriarty started fire at M places in London. Sherlock Holmes has been called to help extinguish the fires as quickly as possible. There are exactly N fire stations in the city, each having infinite amount of fire trucks. But the time taken by each fire station to fill a truck is different and the fire stations can only fill one truck at a time. Initially all the fire trucks are empty.</p>
<p>Given the time taken by each fire station to fill one truck and the time taken for a fire truck to reach the j<sup>th</sup> place from the i<sup>th</sup> fire station, Sherlock needs to tell the minimum time taken to extinguish the fire at all places.</p>
<h3>Input</h3>
<p>
First line contains <b>T</b>,(T&lt;=50) the no. of test cases.</p>
<p>Each line of first test case contains two integers N and M,(N,M &lt;=50) where N denotes the no. of fire stations and M denotes the no. of places under fire.</p>
<p>Next line contains N space separated integers, where the i<sup>th</sup> integer denotes the time taken (1&lt;=time taken&lt;=20) by i<sup>th</sup> fire station to fill one truck.</p>
<p>Then next N lines will follow, each containing M integers, where the integer at i<sup>th</sup> row and j<sup>th</sup> column denotes the time taken (1&lt;=time taken&lt;=20) by a fire truck from i<sup>th</sup> fire station to reach j<sup>th</sup> place.</p>
<h3>Output</h3>
<p>Output of each test case is a single line denoting the minimum time required to extinguish the fire completely.</p>
<h3>Note</h3>
<p>
Consider that as soon as a fire truck reaches the place, the fire extinguishes there in no time. </p>
<p>Each place will require exactly one truck to extinguish the fire.</p>
<p>Fire truck once used can not be used again.</p>
<p>There are infinite number of fire trucks at every station.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
3 4
2 5 4
1 2 3 1
2 3 1 2
2 2 3 1

<b>Output:</b>
6
</pre><h3>Explanation:</h3>
<p>The 1<sup>st</sup> fire station sends trucks to both 1<sup>st</sup> and 4<sup>th</sup> place. Time Taken=5</p>
<p>The 2<sup>nd</sup> fire station sends a truck to 3<sup>rd</sup> place. Time Taken=6</p>
<p>The 3<sup>rd</sup> fire station sends a truck to 2<sup>nd</sup> place. Time Taken=6</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/sameer47">sameer47</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-02-2013</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>