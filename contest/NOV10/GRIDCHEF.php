<?php require("../../includes/header.php"); ?><h1>Chefs Bad Day</h1><div class="content">

<h3> Statement </h3>
<p>
Chef is not having a good time these days. Just Yesterday he made terrible food and hence got beaten up. He has hence decided that he wont prepare food himself but instead collect food from hotels in the city. <br />
However, he suffered injury on his head ( people can get really angry when served with bad food  ) and is suffering from short term memory loss.<br />
He is standing in a city in the form of a grid where cell(i,j) of the grid contains a hotel which has G<sub>ij</sub> amount of food to offer to the chef. Every second, Chef goes to one of the neighbors in the grid.  ( Note: Please note that any cell(i,j) can have atmost 4 neighbors). <br />
Unfortunately, due to short term memory loss, he throws away whatever he is given every alternate second. That is he throws away food given at t = 0 , keeps food given at t = 1, throws away food given at t = 2, and so forth. <br />
The grid also has some added constraints. No hotel ( or cell ) can be visited more than once. Since, Chef has weak memory, he must return to his kitchen ( which is also his starting point ) after collecting the food. <br />
You have to help the Chef choose a path such that the amount of food collected is maximized [ The path should be such that no two cell in the path are same except for the start and end of the path which <b>have to be</b> the same ]. <br /> <br />
<b>The Chef can choose the kitchen ( starting point ) to be located in any of the four corners of the grid.</b>
</p>
<h3> Input </h3>
<p>
The first line contains t ( &lt;= 100 ) which denotes the number of test cases. For each test case, the first line contains 2 space separared integers n,m which denote the dimension of the matrix. Then n lines follow, each containing m space separared integers. jth integer on the ith line denotes G<sub>ij</sub> <br />
<b> Warning :  Enormous Input/Output. </b>
</p>
<h3> Output </h3>
<p>
For each test case, the first line of output should contain a number denoting the maximum amount of food the Chef can collect. The second line of output should contain the length of the path Chef takes ( L )  for the mentioned amount of food. Then follow L lines, where the ith line contains 2 space separated integers ( 0 based ) denoting the cell number of the ith cell in the path. <br />
If there are multiple such optimal paths, any path would suffice. <br />
<b>Note</b> : The first and last cell of the path are the same ( The Chef returns to his starting point ) . <br /> 
</p>
<h3> Sample Input </h3>
<p></p>
<pre>
1 
2 2
2 3
3 2
</pre><h3> Sample Output </h3>
<p></p>
<pre>
6
5
0 0 
0 1
1 1 
1 0
0 0
</pre><h3> Constraints </h3>
<p>
1 &lt; m*n ≤ 100000 <br />
0 ≤ G<sub>ij</sub> ≤ 10000 
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anshuman_singh">anshuman_singh</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/pieguy">pieguy</a></td>
				</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>1-09-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>