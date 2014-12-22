<?php require("../../includes/header.php"); ?><h1>Jam</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK52/mandarin/RRJAM.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK52/russian/RRJAM.pdf">Russian</a> as well.</h3>
<p>Carlson has <b>N</b> jars of jam. They are numbered from <b>1</b> to <b>N</b> while <b>i<sub>th</sub></b> jar contains <b>A<sub>i</sub></b><br />
units of jam. Carslon believes that <b>i<sub>th</sub></b> jar should contain at least <b>B<sub>i</sub></b> units of jam. Unfourtunetly, it happens that <b>A<sub>i</sub></b> is less than <b>B<sub>i</sub></b>. To fix this issue Carlson adds jam by doing <b>M</b> operations. Each operation is defined by four numbers <b>l</b>, <b>r</b>, <b>x</b> and <b>y</b>. It means that Carlson adds <b>x</b> units of jam to the <b>l<sub>th</sub></b>, <b>x + y</b> units of jam to the <b>(l + 1)<sub>th</sub></b> jar, <b>x + 2y</b> units of jam to the <b>(l + 2)<sub>th</sub></b> jar,..., <b>x + (r - l)y</b> units of jam to the <b>r<sub>th</sub></b> jar. After it, Carlson would like to know for each jar <b>i</b> when it starts to contain at least <b>B<sub>i</sub></b> units of jam, i.e. the minimal number of adding operation that <b>i<sub>th</sub></b> jar contained less than <b>B<sub>i</sub></b> units of jam before it, but then started to contain at least <b>B<sub>i</sub></b> units of jam after the operation was applied. Have a look at the examples for better understanding.</p>
<p> </p>
<h3>Input</h3>
<p>The first line of input contains single integer number <b>N</b>. Following line contains <b>N</b> numbers <b>A<sub>i</sub></b> — initial amount of jam in each jar. The next line contains integer number <b>M</b> — number of adding operations. Then <b>M</b> lines follow describing adding operations in chronological order. Every operation is defined by four numbers <b>l</b>, <b>r</b>, <b>x</b> and <b>y</b>.
</p>
<h3>Output</h3>
<p>You should output the answer for each jar separated by space. If it already contains enough jam you should output <b>0</b> as the answer, in case it doesn't even after all the operations output <b>-1</b> instead.</p>
<h3>Constraints</h3>
<p><b>1 ≤ N ≤ 10<sup>5</sup></b><br />
<b>1 ≤ M ≤ 10<sup>5</sup></b><br />
<b>0 ≤ A<sub>i</sub> ≤ 2*10<sup>9</sup></b><br />
<b>0 ≤ B<sub>i</sub> ≤ 2*10<sup>9</sup></b><br />
<b>0 ≤ x, y ≤ 10<sup>5</sup></b><br />
<b>0 ≤ l ≤ r ≤ N</b></p>
<h3>Example</h3>
<pre><b>Input:</b>
5
5 4 4 2 1
7 7 4 7 7
3
1 2 2 0
2 5 1 1
3 4 2 2

<b>Output:</b>
1 2 0 3 -1


</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/Rubanenko">Rubanenko</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/tuananh93">tuananh93</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-09-2014</td>
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
    </table><?php require("../../includes/footer.php"); ?>