<?php require("../../includes/header.php"); ?><h1>Greedy Trip</h1><div class="content">

<p>Chef feels pretty greedy today. As you know Chef lives in ChefLand. It consists of <b>N</b> cities, connected by <b>M</b> one-directional roads. There are plenty of festivals in ChefLand and Chef does not want to miss any of them. So he has invented an efficient (as he thinks) algorithm of finding the shortest paths between cities. To get from city <i>S</i> to city <i>T</i> then he uses following method:</p>
<ul>
<li>The trip starts at city <i>S</i></li>
<li>If Chef reaches city <i>T</i> then the algorithm stops</li>
<li>Initially only city S is visited and others are not</li>
<li>Chef chooses the shortest road from the current city that leads him to any unvisited city; if there are multiple shortest roads connected to unvisited cities then Chef can choose any of them; if all neighbour cities are visited then the algorithm stops</li>
<li>Chef goes along chosen road and algorithm returns to the previous step</li>
</ul>
<p>If in the end of the algorithm Chef is in the City T then he assumes this path to be the shortest, otherwise Chef believes that it is impossible to get from city <i>S</i> to city <i>T</i> by current system of roads.<br /> You want to check his greedy algorithm. To do this you need to find number of such different pairs of cities (U,V) that this algorithm can probably find the shortest path from city U to city V. Note that if it is impossible to reach city V from U and Chef's algorithm can conclude the same that this pair of cities is also counted to the answer. Have a look at the example for better understanding.</p>
<h3>Input:</h3>
<p>The first line contains the number of cities <b>N</b>, the number of roads.  Then <b>M</b> lines follow with description of roads. Each road is described by three integers <b>u</b>, <b>v</b> and <b>w</b>, it means that there is a road from city <b>u</b> to city <b>v</b> of length <b>w</b>.</p>
<h3>Output:</h3>
<p>Output should contain a single integer on the first line - answer for the problem.</p>
<h3>Constraints:</h3>
<pre>1 ≤ <b>N</b> ≤ 2000
1 ≤ <b>M</b> ≤ 10000
1 ≤ <b>u,v</b> ≤ <b>N</b>
1 ≤ <b>w</b> ≤ 10000

</pre><h3>Example:</h3>
<p><b>Input #1:</b></p>
<pre>2 0

</pre><p><b>Output #1:</b></p>
<pre>4

</pre><p><b>Input#2:</b></p>
<pre>3 3
1 2 1
1 3 2
2 3 2

</pre><p><b>Output#2:</b></p>
<pre>8

</pre><p><b>Explanation:</b></p>
<p> For input#1 every possible pair is valid. for input#2 pair(1,3) is not valid, since Chef's algorithm will always go this way 1-&gt;2-&gt;3, while 1-&gt;3 is right way to get from 1 to 3. </p>
<p></p>
<h3>Scoring:</h3>
<p>You will be awarded <b>40</b> points for solving the problem correctly for 1 ≤ <b>N, M </b> ≤ 300.</p>
<p> The remaining <b>60</b> points will be awarded for solving the problem correctly for <b>N, M </b> &gt; 300.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/Rubanenko">Rubanenko</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/vamsi_kavala">vamsi_kavala</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>16-06-2013</td>
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