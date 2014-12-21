<?php require("../../includes/header.php"); ?><h1>Magical Girl and Colored Liquid Potions</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/OCT14/mandarin/PRPOTION.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/OCT14/russian/PRPOTION.pdf">Russian</a>.</h3>
<p>
Naturally, the magical girl is very good at performing magic. She recently met her master wizard Devu, who gifted her <b>R</b> potions of red liquid,<br />
<b>B</b> potions of blue liquid, and <b>G</b> potions of green liquid.
</p>
<p><ul>
<li>
The red liquid potions have liquid amounts given by <b>r[1], ..., r[R]</b> liters.
</li>
<li>
The green liquid potions have liquid amounts given by <b>g[1], ..., g[G]</b> liters.
</li>
<li>
The blue liquid potions have liquid amounts given by <b>b[1], ..., b[B]</b> liters.
</li>
</ul>
</p>
<p>
She want to play with the potions by applying magic tricks on them. In a single magic trick, she will choose a particular color. Then she will pick all the potions of the chosen color and decrease the amount of liquid in them to half (i.e. if initial amount<br />
of liquid is <b>x</b>, then the amount after decrement will be <b>x / 2 </b> where division is integer division, e.g. 3 / 2 = 1 and 4 / 2 = 2). </p>
<p>
Because she has to go out of station to meet her uncle Churu, a wannabe wizard, only <b>M</b> minutes are left for her. In a single minute, she can perform at most one magic trick. Hence, she can perform at most <b>M</b> magic tricks.
</p>
<p>
She would like to minimize the maximum amount of liquid among all of Red, Green and Blue colored potions. Formally Let v be the maximum value of amount of liquid in any potion. We want to minimize the value of v.<br />
Please help her.
</p>
<h3>Input</h3>
<p>
First line of the input contains an integer <b>T</b> denoting the number of test cases.<br />
Then for each test case, we have four lines.
</p>
<p>The first line contains four space separated integers <b>R</b>, <b>G</b>, <b>B</b>, <b>M</b>. The next 3 lines will describe the amount of different color liquids (<b>r, g, b</b>), which are separated by space.
</p>
<h3>Output</h3>
<p>For each test case, print a single integer denoting the answer of the problem.</p>
<h3>Constraints</h3>
<ul>
<li> 1 ≤ T ≤ 1000 </li>
<li> 1 ≤ R, G, B, M ≤ 100 </li>
<li> 1 ≤ r[i], g[i], b[i] ≤ 10^9 </li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
1 1 1 1
1
2
3
1 1 1 1
2
4
6
3 2 2 2
1 2 3
2 4
6 8
<b>Output:</b>
2
4
4
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> Magical girl can pick the blue potion and make its liquid amount half. So the potions will now have amounts 1 2 1. Maximum of these values is 2. Hence answer is 2.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/dpraveen">dpraveen</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/shangjingbo">shangjingbo</a></td>
				</tr>
								
		        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-09-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>