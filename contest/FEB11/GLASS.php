<?php require("../../includes/header.php"); ?><h1>Glass Measurement</h1><div class="content">

<h3> Statement </h3>
<p>
Chef has n glasses each with a capacity of xi. <br />
There are Q+1 people playing a game including the Chef himself. Everyone at his/her turn gives a positive integer M<sub>i</sub> and asks the Chef if volume M of water can be transferred using the n glasses with Chef. Chef at his own turn wants to give M as the highest integer volume which cannot be constructed using these n glasses. <br />
So, you need to help chef with this game. <br />
Assume that to construct a volume M, we have a reserve with infinite volume of liquid. If Chef uses i<sup>th</sup> glass, he has to transfer a volume equal to xi in one turn. He can use a glass multiple times. However, transfer of liquid between glasses is not permitted. For example, you cannot obtain volume of 2 by tranferring liquid from glass of volume 5 to glass of volume 3. <br />
It is always possible to construct volume 0.
</p>
<h3> Input </h3>
<p>First line contains t ( ≤ 20 ) which is the number of test cases. For each test case, the first line contains n ( the number of glasses ) . The next line contains n space separated integers denoting the capacity of each glass. The next line contains a single integer Q - the number of players excluding the Chef. Then follows a line containing 3 space separated integers a,b,c. Calculate M<sub>i</sub> for the ith person as (a*i+b)%c ( i ≥ 1 ). </p>
<h3> Output </h3>
<p>For each test case, the first line of output should contain the highest value M desired by Chef [ If there is no positive M, then output -1 ]. Then follows a line containing 2 integers A and B where A denotes the number of M<sub>i</sub> which cannot be constructed using the given glasses and B denotes the number of M<sub>i</sub> which can be constructed.</p>
<h3> Sample Input </h3>
<pre>
1
2
3 5
2
8 1 10

</pre><h3> Sample Output </h3>
<pre>
7
1 1
</pre><h3> Constraints </h3>
<p>
1 &lt; n ≤ 10 <br />
1 ≤ xi ≤ 10<sup>7</sup> <br />
MIN(xi) ≤ 100000 <br />
1 ≤ Q ≤ 1000000 <br />
1 ≤ a,c ≤ 10<sup>12</sup> <br />
0 ≤ b ≤ 10<sup>12</sup> 
</p>
<p></p>
<h3> Sample Test Case Explanation </h3>
<p>
There are 2 glasses of size 3 and 5. Volumes 1, 2, 4, 7 cannot be created by the combinations of glass suggested in the problem. Hence, the highest volume is 7. <br />
The 2 queries are for 9 and 7. 9 can be created using the glasses and 7 cannot.
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anshuman_singh">anshuman_singh</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/subra">subra</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>2-09-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>7 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>