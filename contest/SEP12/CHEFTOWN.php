<?php require("../../includes/header.php"); ?><h1>ChefTown Parade</h1><div class="content">

<p>
ChefTown is the biggest city and the capital of ChefLand. There are N beautiful buildings: restaurants, museums, living houses with large kitchens and so on. Every building has its height. For every i (1&lt;=i&lt;=N) there is exactly one building with height i. The buildings are located in a single line from left to right. The height of ith building is H(i). The Mayor of ChefTown wants to organize a parade, where all great chefs will take part. A parade depends of its location. The location of a parade is a segment of consecutive buildings beginning near the building number L and ending near the building number R (1&lt;=L&lt;=R&lt;=N). Any parade won't be interesting if it is not hold on an interesting segment of buildings. The segment of buildings is interesting if following are hold:</p>
<ul>
<li>Imagine, that we have a segment [L,R].</li>
<li>Let K=R-L+1 be the length of this segment, and B be a list of heights of the buildings that belong to this segment.</li>
<li>Let's sort B in non-decreasing order.</li>
<li>Segment [L,R] is interesting if B[i]-B[i-1]=1 for every i (2&lt;=i&lt;=K).</li>
</ul>

<p>
Now the Mayor of ChefTown is interested how many ways to organize an interesting parade of length W for ChefTown citizens. Help him and find out the number of different parades of length W, which can be hold in the city. Two parades ([L1,R1] and [L2,R2]) are considered to be different, if L1&ne;L2 or R1&ne;R2.</p>
<h3>Input</h3>
<p> Each input file consists of two lines, the first one contains two integers N and W (1&lt;=N&lt;=400000, 1&lt;=W&lt;=N). The second line contains N numbers H(i) (1&lt;=i&lt;=N) - the heights of the buildings. </p>
<h3>Output</h3>
<p>For each test case output a single integer - the number of interesting segments of buildings of length W.</p>
<h3>Example</h3>
<pre>
<b>Input 1:</b>
2 1
2 1
<b>Input 2:</b>
4 2
1 2 3 4

<b>Output for Input 1:</b>
2
<b>Output for Input 2:</b>
3
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/Rubanenko">Rubanenko</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>3-08-2012</td>
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