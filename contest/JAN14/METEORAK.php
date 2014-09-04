<?php require("../../includes/header.php"); ?><h1>Meteor</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN14/mandarin/METEORAK.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN14/russian/METEORAK.pdf">Russian</a>.</h3>
<p>A meteor fell on Andrew's house. That's why he decided to build a new home and chose a site where he wanted to build it. Let the whole area be a rectangular field of size <b>N</b>x<b>M</b>. Naturally, Andrew wanted to build a house on the entire area of the site. However, the Hazardous Construction Prevention Bureau did not let Andrew's plans come true. The Bureau said that some of the cells of the field are dangerous for the foundation. There are exactly <b>K</b> such cells. </p>
<p>Andrew's not a poor man. And as anyone who has money, he saves money. Therefore, he is willing to buy not the whole area, but only a stripe of the same width. The house will occupy a rectangular area in this stripe with sides parallel to the sides of the original site.</p>
<p>Andrew is asking for your help: for each <b>L<sub>i</sub></b>, <b>H<sub>i</sub></b>  - the lowest and the highest boundaries (inclusive), respectively - find the maximum area of ​​the house that Andrew can build on the relevant site.</p>
<p> </p>
<h3>Input</h3>

<p>In the first line you are given three integers <b>N</b>, <b>M</b> and <b>K</b>.<br />
In the following <b>K</b> lines you are given different pairs of integers <b>x<sub>i</sub></b>, <b>y<sub>i</sub></b> - the coordinates of the dangerous cells.<br />
Next line contains an integer <b>Q</b> - the number of Andrew's queries<br />
The last <b>Q</b> lines describe the queries: each line contains two integers <b>L</b> and <b>H</b> - the lowest and the highest boundaries.</p>
<p> </p>
<h3>Output</h3>
<p>In the output file, print <b>Q</b> lines, where i-th line contains the answer for <b>i</b>-th query. If you cannot build the house, then output <b>0</b>.</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N, M</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>N * M</b></li>
<li><b>1</b> ≤ <b>x<sub>i</sub></b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>y<sub>i</sub></b> ≤ <b>M</b></li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>10<sup>6</sup></b></li>
<li><b>1</b> ≤ <b>L<sub>i</sub></b> ≤  <b>H<sub>i</sub> ≤ <b>N</b></b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
4 5 5
2 1
3 2
1 3
2 4
1 4
4
1 1
3 4
2 3
1 4

<b>Output:</b>
2
6
3
6
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/Rubanenko">Rubanenko</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/white_king">white_king</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>13-11-2013</td>
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