<?php require("../../includes/header.php"); ?><h1>Jackpot</h1><div class="content">
<p>A certain business farm has introduced a loyalty program.</p>
<p>At the time of registration to the loyalty program, a customer is given 1 point. The points will get upgraded after the first new purchase every week. After such purchase, the customer can select between the following two policies to upgrade points:</p>
<ul>
<li>Get exactly 1 more point</li>
<li>Double the points that he/she has</li>
</ul>
<p>For example, if the customer had 43 points before a purchase, he/she can upgrade it to 44 or 86, depending upon points upgrade policy of their choosing.</p>
<p>A certain business farm has introduced a loyalty program.</p>
<p>At the time of registration to the loyalty program, a customer is given 1 point. The points will get upgraded after the first new purchase every week. After such purchase, the customer can select between the following two policies to upgrade points:</p>
<ul>
<li>Get exactly 1 more point</li>
<li>Double the points that he/she has</li>
</ul>
<p>For example, if the customer had 43 points before a purchase, he/she can upgrade it to 44 or 86, depending upon points upgrade policy of their choosing.</p>
<p>At the time of registration, each customer is also given a <b>Jackpot</b> target. Special facilities will be provided to the customer if the accumulated points of the customer become equal to this Jackpot. However, accumulating points more or less than the Jackpot does not earn them anything.</p>
<p>For example, for a customer with Jackpot target 437, special facilities will be provided if and only if his/her points becomes exactly equal to 437 after some purchases.</p>
<p>Of course the simplest plan that may be adopted by the customer is to increment his points by 1 after each purchase. However, an intelligent customer would like to achieve the Jackpot score in the minimum number of purchases.</p>
<p>Even still, for a single customer, the number of weeks in which he gets the Jackpot will be equal to the number of purchases, since only the first purchase in a week qualifies towards upgrade of points.</p>
<p>The most intelligent customer of all would partner with a friend and try to merge their points in the end. Of course this is better because this means that fewer weeks will be necessary to achieve the Jackpot. Alice and Bob are going to use this strategy. They will decide a sub-target score for themselves (which may be different for each of them) and try to reach that sub-target in the fewest number of weeks (at the rate of one purchase per week). Once both of them reach that sub-target, they will merge their points to achieve Alice's Jackpot target! See the Explanation Section for clarification.</p>
<p>Write a program that takes as input Alice's Jackpot score and outputs the minimum number of weeks Alice and Bob take to achieve the Jackpot score. Note that Alice and Bob will never merge their scores in between. They will only merge their scores once they reach the respective sub-targets they decide for themselves.</p>
<h3>Input</h3>
<p>The first line of input contains the number T, the number of test case. Each test case contains a single integer N, Alice's Jackpot target.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the number W, the minimum number of weeks necessary for Alice and Bob to achieve Alice's Jackpot target.</p>
<h3>Constraints</h3>
<pre>1 ≤ T ≤ 1000
2 ≤ N ≤ 1000000000

</pre>
<h3>Sample Input</h3>
<pre>4
2
4
10
55

</pre>
<h3>Sample Output</h3>
<pre>0
1
3
6

</pre>
<h3>Explanation</h3>
<p>In the first example, Alice and Bob have already reached the target. In the second example, they both choose the sub-target 2 and achieve it in 1 week by making one purchase each. Their merged score then becomes equal to 4. In the last example, Alice chooses to reach 8 and Bob chooses to reach 2. Alice can reach 8 in 3 weeks and Bob reaches 2 in 1 week. Thus, they achieve their target 10, in 3 weeks (bottlenecked on Alice). There are more ways to split the target to still achieve it in 3 weeks, but there is no way to split the target among them to achieve it in 2 weeks. Hence, the answer is 3.</p>
<p>In the last test case, Alice and Bob can split the target as 36 and 19. 36 can be achieved Alice in 6 purchases (or weeks). 19 can be achieved by Bob in 6 purchases (or weeks). Hence, the answer is 6. Of course there are other ways, but there is no way that can achieve this in fewer than 6 weeks.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gamabunta">gamabunta</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-10-2013</td>
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
            <td>C, CPP 4.8.1, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>