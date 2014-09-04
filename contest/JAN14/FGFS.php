<?php require("../../includes/header.php"); ?><h1>Bon Appetit</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN14/mandarin/FGFS.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN14/russian/FGFS1.pdf">Russian</a>.</h3>
<p> Our chef has recently opened a new restaurant with a unique style. The restaurant is divided into <b>K</b> compartments (numbered from <b>1</b> to <b>K</b>) and each compartment can be occupied by at most one customer. </p>
<p> Each customer that visits the restaurant has a strongly preferred compartment <b>p</b> (<b>1 ≤ p ≤ K</b>), and if that compartment is already occupied, then the customer simply leaves. Now obviously, the chef wants to maximize the total number of customers that dine at his restaurant and so he allows (or disallows) certain customers so as to achieve this task. You are to help him with this. </p>
<p> Given a list of <b>N</b> customers with their arrival time, departure time and the preferred compartment, you need to calculate the maximum number of customers that can dine at the restaurant. </p>
<h3>Input</h3>
<p> The first line contains an integer <b>T</b> denoting the number of test cases. Each of the next <b>T</b> lines contains two integers <b>N</b> and <b> K </b>, the number of customers that plan to visit the chef's restaurant and the number of compartments the restaurant is divided into respectively. Each of the next <b>N</b> lines contains three integers <b>s<sub>i</sub></b>, <b>f<sub>i</sub></b> and <b>p<sub>i</sub></b> , the arrival time, departure time and the strongly preferred compartment of the <b>i<sup>th</sup></b> customer respectively.  <br /><br />
Note that the <b>i<sup>th</sup></b> customer wants to occupy the <b>p<sub>i</sub><sup>th</sup></b> compartment from <b>[s<sub>i</sub>, f<sub>i</sub>) </b> i.e the <b>i<sup>th</sup></b> customer leaves just before  <b> f<sub>i</sub> </b> so that another customer can occupy that compartment from  <b> f<sub>i</sub> </b> onwards.</p>
<h3>Output</h3>
<p> For every test case, print in a single line the maximum number of customers that dine at the restaurant.</p>
<h3>Constraints</h3>
<ul>
<li><b> 1 </b>≤  <b>T</b> ≤ <b>  30 </b></li>
<li><b> 0 </b> ≤ <b>N</b>  ≤ <b> 10<sup>5</sup> </b></li>
<li><b> 1 </b> ≤ <b> K</b>  ≤ <b> 10<sup>9</sup> </b></li>
<li><b> 0 </b> ≤  <b>s<sub>i</sub></b> &lt; <b>f<sub>i</sub></b> ≤ <b>  10<sup>9</sup> </b></li>
<li><b> 1 </b> ≤ <b> p<sub>i</sub> </b> ≤ <b> K </b> </li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
3 3
1 3 1
4 6 2
7 10 3
4 2
10 100 1
100 200 2
150 500 2
200 300 2

<b>Output:</b>
3
3
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b><br /><br />
All three customers want different compartments and hence all 3 can be accommodated.
 </p>
<p><b>Example case 2.</b><br /><br />
If we serve the <b>1<sup>st</sup></b>, <b>2<sup>nd</sup></b> and <b>4<sup>th</sup></b> customers, then we can get a maximum of 3.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/viv001">viv001</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gerald">gerald</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-12-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.5 sec</td>
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