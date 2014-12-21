<?php require("../../includes/header.php"); ?><h1>DevuLand, Dinosaurs and Laddus</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/OCT14/mandarin/PRLADDU.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/OCT14/russian/PRLADDU.pdf">Russian</a>.</h3>
<p>
	DevuLand is a very strange place. There are <b>n</b> villages in it. Some of the villages are occupied by dinosaurs while the remaining ones by villagers.<br />
	You are given the information of DevuLand<br />
	by an array <b>D</b> of size <b>n</b>. If <b>D[i]</b> is non-negative, it means that there are <b>D[i]</b> villagers in that village.<br />
	Otherwise, it means that are -<b>D[i]</b><br />
	dinosaurs in that village.
</p>
<p>
	It is also guaranteed that total number of villagers in DevuLand is equal to total number of dinosaurs.
</p>
<p>
Once dinosaurs got very hungry and started eating villagers. Frightened villagers gathered immediately and met their Sarpanch Deviji. Deviji, being a very daring and negotiable person, met to the head<br />
of dinosaurs. Soon both parties called a truce. It was decided that the villagers will provide laddus to<br />
the dinosaurs. So everyday, each villager will take exactly one laddu to one of the dinosaurs in such a way that no dinosaur remains hungry (note that this is possible because number of villagers is the same as the number of dinosaurs).
</p>
<p>
Actually, carrying laddus is a quite a tough job. Villagers have to use a bullock cart for that. It takes one unit of grass a bullock to<br />
carry a cart with 1 laddu for <b>1</b> kilometre. Laddus used to be very heavy in DevuLand, so a bullock cart can not carry more than one laddu.</p>
<p>It is also given distance between village indexed <b>i</b> and <b>j</b> is |<b>j</b> - <b>i</b>| (the absolute value) kilometres.
</p>
<p>
Now villagers sat down and found a strategy to feed laddus to dinosaurs so that they need to buy the least amount of grass from the nearby market.<br />
They are not very good in<br />
calculations, please find out what is the minimum number of units of grass they need to buy.
</p>
<h3>Input</h3>
<p>
First line of the input contains an integer <b>T</b> denoting number of test cases.
</p>
<p>
For each test case, there are two lines.
</p>
<p>
First line contains a single integer denoting n: number of villages.
</p>
<p>
Second line contains n space separated integers denoting the array <b>D</b>.
</p>
<h3>Output</h3>
<p>
For each test case, print a single line containing the integer corresponding to answer of the problem.
</p>
<h3>Constraints</h3>

<ul>
<li> 1 ≤ T ≤ 10^5 </li>
<li> 1 ≤ n ≤ 10^5 </li>
<li> -10^4 ≤ D[i] ≤ 10^4 </li>
<li> Sum of n over all the test cases will be ≤ 10^6 </li>
<li> It is guaranteed that sum of D[i] is zero for a single test case which ensures that there are equal number of villagers and dinosaurs. </li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
2
5 -5
2
-5 5
3
1 2 -3
<b>Output:</b>
5
5
4
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> Each villager in village 1, need to walk 1 km to reach to the dinosaur in 2nd village.</p>
<p><b>Example case 2.</b> Each villager in village 2, need to walk 1 km to reach to the dinosaur 1st village.</p>
<p><b>Example case 3.</b> Each villager in village 1, need to walk 2 km to reach to the dinosaur in 3rd village whereas Each villager in village 2,<br />
need to walk 1 km to reach to the dinosaur in 3rd village.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
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
            <td>15-09-2014</td>
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