<?php require("../../includes/header.php"); ?><h1>Counting Terms</h1><div class="content">

<p>When the Chef is not busy with cooking delicious foods, one of his favorite pastime is to solve mathematical problem. But as you know, he is not very good with programming. So when he fails to solve a problem he usually asks John to write a program that will solve it.<br />
<br />
Recently the chef became interested in finding the expansion of (x<sub>1</sub>+x<sub>2</sub>+....+x<sub>k</sub>)<sup>n</sup>. Specifically he is more interested in number of terms in it. Being unable to solve the problem he asked John for help. The conversation between John and chef goes as<br />
<br />
Chef: Can you write a program that will calculate f(n,k)= number of terms in (x<sub>1</sub>+x<sub>2</sub>+....+x<sub>k</sub>)<sup>n</sup> ?<br />
<br />John: That is a very easy problem.<br />
<br />Chef: Oh, really? Then calculate the sum over (i=0 to n) (f(i,k))<br />
<br />John: That is also an easy problem.<br />
<br />Chef: Then go finish it. And did I mention that I am calculating modulo a prime number p.<br />
<br />John: What?<br />
<br />Chef: Say k=2, n=4, p=3. Then (x<sub>1</sub>+x<sub>2</sub>)<sup>4</sup> %3 = (x<sub>1</sub><sup>4</sup>+4 x<sub>1</sub><sup>3</sup> x<sub>2</sub>+6 x<sub>1</sub><sup>2</sup> x<sub>2</sub><sup>2</sup>+ 4 x<sub>1</sub> x<sub>2</sub><sup>3</sup> + x<sub>2</sub><sup>4</sup>) %3 = (x<sub>1</sub><sup>4</sup>+ x<sub>1</sub><sup>3</sup> x<sub>2</sub> + x<sub>1</sub> x<sub>2</sub><sup>3</sup> + x<sub>2</sub><sup>4</sup>) %3. So if p=3 then f(4,2)=4.<br />
<br />John: OK, I am doing it.<br />
<br />
As John started to solve the problem he realized it is not that easy. Now he asked you, his best friend, for help.<br />
<br />
As the answer can be quite large print the output modulo 1000003.</p>
<h3>Input</h3>

<p>Input file starts with a line containing a number T. T lines follow each describing a test case. Each test case consists of a line containing three space separated integers n, k, p.</p>
<h3>Output</h3>

<p>Output T lines, each line containing the Sum over (i=0 to n) f(i,k) for the given prime p modulo 1000003.</p>
<h3>Limit:</h3>

<p>1&lt;=T&lt;=10000
</p>
<p>0&lt;=n&lt;=10^15
</p>
<p>1&lt;=k&lt;=10^15
</p>
<p>1&lt;=p&lt;=100
</p>
<p>p prime number</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
7
10 2 2
10 2 3
10 3 2
10 3 3
4 2 3
3 2 3
0 2 2

<b>Output:</b>
37
42
85
112
12
8
1

</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/tanaeem">tanaeem</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/subra">subra</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>3-01-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>10 sec</td>
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