<?php require("../../includes/header.php"); ?><h1>Cake Production Line</h1><div class="content">

<p>
Today, the Chef has been asked to bake a variety of cakes for some very important regular customers. Each cake has multiple components that may be prepared in parallel by different bakers. For example, the bakers working for the chef can simultaneously bake the cake, whip the icing, boil the fondant, make the decorations, etc. Each of these tasks take time to accomplish and may this time vary between different cakes (e.g. some cakes may have multiple layers, others may require more icing than usual, etc).</p>
<p>
Once all of the pieces of the cake have been prepared by the bakers, the Chef can assemble the final product in virtually no time at all. So, a cake is said to be completed once its last component has been finished by the bakers. Each baker specializes in exactly one task so if one baker finishes early, he cannot help another baker.</p>
<p>
The Chef wants to prepare the cakes as quickly as possible. To measure this, he has assigned a "weight" to each customer according to how much he values their patronage. The "weighted completion time" of a cake is the time it takes to complete it times the weight of its associated customer. The Chef wants to try and minimize the sum of the weighted completion times of all cakes. To do this he determines, for each baker, a permutation of the customers. The baker then prepares all of the components he creates for the requested cakes in the order he is given. He starts working on the first cake in the list and as soon as he finishes creating his component for one cake, he immediately starts working on the next cake in the list until he has processed all of the cakes.</p>
<p>
A default order is usually specified. It is the order where each baker simply processes the cakes in the same order they appear on the initial list. The Chef suspects that there may be a better ordering of the jobs. Help him find a schedule with better weighted completion time!</p>
<h3>Input</h3>

<p>
The first line consists of a single integer T ≤ 30 indicating the number of test cases to follow. Each test case begins with two integers n,m on a single line, both between 1 and 200. Here, n is the number of different cakes that have been ordered and m is the number of different components that must be assembled per cake. Thus, the problem statement says that there are also m different bakers, one per job type.</p>
<p>
Following this are n different lines, each containing m+1 integers. The first integer on the i'th line is the weight of customer i, a positive integer between 1 and 10,000. Of the remaining m integers, the j'th integer indicates the amount of time that must be spend by baker j on cake i, again a positive integer between 1 and 10,000.</p>
<h3>Output</h3>

<p>
For each test case you are to output m different lines, each describing the order the respective baker prepares their component for the cakes. Specifically, the i'th line of the output for a given test case should be a permutation of the numbers 1 through n. The first number is the first cake the i'th baker works on, the second number is the second cake the i'th baker works on, and so on.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
3 2
1 1 2
4 2 4
5 10 1
2 2
1 2 3
4 5 6

<b>Output:</b>
1 2 3
2 3 1
2 1
2 1
</pre><h3>Scoring</h3>

<p>
For each test case, we will compute the weighted completion time of the schedule where each baker simply processes the cakes in the order 1, 2, ..., n. Call this value K. We will also compute the weighted completion time of the schedule specified by your output, call this value L. The score for this test case is then L/K and the total score for the entire data set is L/K. Your goal is to minimize this quantity.</p>
<p>
For example, in the first test case, the default ordering for each baker is 1,2,3. So the first cake is completed after 2 units of time, the second cake is completed after 6 units of time and the third cake is completed after 13 units of time. Therefore, the weighted completion time is 1*2 + 4*6 + 5*13 = 91. However, following the schedule in the sample output we see that the second cake is finished after 4 units of time, the first cake is finished after 7 units of time and the third cake is finished after 13 units of time for a weighted completion time of 1*7 + 4*4 + 5*13 = 88. Therefore, the score for this particular test case is 88/91.</p>
<p>
Similarly, the weighted completion time of the default ordering of the second test case is 1*3 + 4*9 = 39 whereas the specified ordering in the sample output has a weighted completion time of 1*9 + 4*6 = 33 so the total score for this case is 33/39.</p>
<h3>Test Data</h3>

<p>
Some test data is hand-crafted to cause certain heuristics to perform poorly and some data is randomly generated according to varying distributions.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/friggstad">friggstad</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anshuman_singh">anshuman_singh</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-08-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>8 sec</td>
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