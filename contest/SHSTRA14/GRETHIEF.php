<?php require("../../includes/header.php"); ?><h1>Dreamers e-Trip</h1><div class="content">
<p>Smit dreams of him being a King of a state. His story goes as follows,</p>
<p>He fancies to create a state with N cities with M unidirectional roads between them. Initially none of the roads are ready for carrying heavy vehicles (incl. Smit's Maruti 800). So, he plans to donate money to the person responsible of each road, so that the construction of the roads can be done at the rate of 'b' units a day. In general construction rate of a road is given by <b>r(t) = a+b*t</b> where t is the time in day. The tuple (a,b) may be different for different roads. If the value of r(t) becomes &gt;= 0, Smit declares that the road is constructed and is ready for use.</p>
<p>Smit wants to visit all his cities everyday. He desires to visit all the cities everyday before he returns to the capital from where he starts the day. His strategy for a given day is as follows,<br />
</p>
<ul>
<li>He must visit any city only once.</li>
<li>Let's say he starts from a city c1, he leaves his food there. He can go to the other cities like c2, c3 and ck using the unidirectional roads. After completing his visit he returns back to c1 to have food. Now, he removes all the cities c1, c2.. ck from the list of cities to visit and starts from some other city d1 (leaves his food here) and and visits the cities which are not already visited like d2, d3.. dk_1 before returning for his food which is at d1. Again he removes the cities d1, d2.. dk_1 before starting from another city e1(if any). This goes on until he visits all the cities in this fashion. We can safely assume that he flies from city c1 to d1(if any) and then to e1(if any) and so on. Here let's call each set of cities he visits like {c1, c2,.. ck}, {d1, d2.. dk1} to be a Mission. Also he assumes that in a particular mission if he doesn't visit more than one city, people of his state will think that he is lazy. So, he tries to avoid such scenarios ie., he desires ot have k, k1.. &gt; 1.
</li></ul>
<p>
He orders his minister Dhanvin to devise a strategy to visit all the cities (which is famously known as Operation) according to the rules he posed. Also Smit tells him to find the day on which he can start the Operation and also he wants to start Operation as soon as possible. Once he starts his first Operation, he orders to stop the construction of all the roads and destroy the ones that are incomplete. During each Operation, Smit plans to collect tax from the people living in each road. The total tax payable by all the people of a road is given by the function <b>tax(t_1) = c + d*t_1</b> here the time 't_1' starts from the day Smit does his first Operation i.e., t_1 = 0 on the first Operation day. As the days pass by, the people get tired paying taxes. So, d is strictly negative. And once tax(t_1) of a road drops to zero, Smit doesn't expect any tax (or get 0) from the people of that road. Dhanvin being jealous of Smit, decides to present a strategy such that Smit collects least amount of tax possible. And also Smit asks Dhavin for the travel plan everyday (every t)</p>
<p>Here comes Chinmay, as cunning as his name sounds, he plans to steal the money Smit collects as tax. And he decides to rob at the end of the day after Smit visits all the cities. But unfortunately he has a bag that can carry maximum of U coins. Chinmay likes to finish this job as soon as possible so that he can escape to Vegas before he dies (he dies on the day t = 10^9 + 1). Busy with his Vegas plans, Chinmay asks you tell him the maximum amount of money he can steal, if he can do that on multiple days, output the minimum time he has to wait after Smit starts the Operation. Also, Chinmay doesn't have time to split the money and put in his bag while robbing Smit. He will take the money if and only if all the money that Smit is carrying can fit in the bag (ie &lt;= U). If Smit can never start the Operation or if Chinmay can never steal any money (&gt; 0) before he dies, print -1.<br />
  </p>
<h3>Input</h3>
<p>Input description.</p>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains two integers <b>N, M, U</b>.      <b>N</b> denotes the number of cities and <b>M</b> denotes the number of one way roads between the cities. <b>U</b> denotes the size of the bag Chinmay is carrying.Then <b>M</b> lines follow. the ith line describes the ith connection. It contains six space separated integers u  v a_i b_i c_i d_i. Here u != v. This means there is an unidirectional road from u to v. Note that u and v are 1-indexed. And the construction rate r(t) for this road is given by "a_i+b_i*t" and the tax function tax(t_1) is given by "c_i+d_i*t_1".
</li>
</ul>
<p> </p>
<h3>Output</h3>
<p>Output description.</p>
<ul>
<li>For each test case, print three space separated integers. First, the minimum time Smit has to wait to start his Operation. Let's assume the time starts from 0. Second, the maximum amount of money Chinmay can steal and what is the minimum time he has to wait to rob that amount after Smit starts the Operation. If at-least one of scenarios is not possible print "-1" (Quotes are for clarity. Don't print them)</li>
</ul>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>2</b> ≤ <b>N</b> ≤ <b>200</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>5000</b></li>
<li><b>1</b> ≤ <b>U</b> ≤ <b>10^9</b></li>
<li><b>-10^9</b> ≤ <b>a_i</b> ≤ <b>0</b></li>
<li><b>1</b> ≤ <b>b_i</b> ≤ <b>100</b></li>
<li><b>-10^9</b> ≤ <b>c_i</b> ≤ <b>10^9</b></li>
<li><b>-100</b> ≤ <b>d_i</b> &lt; <b>0</b></li>
<li>Here ^ denotes the power function.
</li></ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3

3 3 10
1 2 -4 6 5 -2
1 3 -2 1 3 -1
2 3 -10 4 1 -2

3 3 1     
1 2 -5 1 10 -4
2 3 -5 1 10 -1
3 1 -1 1 5 -1

2 2 2
1 2 -4 2 10 -5
2 1 -3 1 6 -3

<b>Output:</b>
-1
5 1 9
-1
</pre><p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b><br />
Here Smit can never start his Operation as he can't visit all the cities according the rules.
</p>
<p><b>Example case 2.</b><br />
Here Smit can start his Operation on day 5. Chinmay plans to steal 9 days after Smit starts the Operation. i.e., on day 14.
</p>
<p><b>Example case 3.</b><br />
Here though Smit starts his Operation on day 3. Chinmay can never steal from his as Smit always has &gt; 2 coins or no coins with him. And Chinmay dislikes stealing 0 coins (so does everyone!)
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/karthikabinav">karthikabinav</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>3-01-2014</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>