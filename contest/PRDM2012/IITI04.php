<?php require("../../includes/header.php"); ?><h1>Martian Thief</h1><div class="content">

<p><i>Freakin' news has recently claimed that they have discovered a civilization on mars and that they have established contact with the martians. Following is a summary of the dinner hour breakin' news on freakin' news :</i></p>
<p>So, the thief with the knapsack has entered the house. But this time, the setting for the theft is mars. Martian homeowners are weird. In this particular house, there are n objects numbered from 1,2,...n. Object has a weight w[i] and potential value v[i]. The capacity of the knapsack the theif is carrying is C. The theif wants to select a subset of the objects whose resale value is maximum and whose weight is atmost C.</p>
<p>In a martian home, each object has preobjects without which it is dysfunctional. It is guaranteed that<br /><br />
A] Every object has either 1 or 0 preobjects.<br /><br />
B] No object is a preobject of itself.<br /><br />
C] There is no cyclic preobject dependency.<br /><br />
	i.e. There does not exist a sequence of objects a[1],a[2],...a[n] such that a[i] is a preobject of a[i+1] for all i, 1&lt;=i&lt;=n-1 and a[n] is a preobject of a[1].<br /></p>
<p>Following is a peculiarity of the resale value of an object on mars : The resale value of an object i in the selected subset equals its potential value v[i] if and only if its preobject (if any) is included in the selected subset and the resale value of the preobject equals its potential value. Otherwise, the resale value of that object is zero.<br /><br />
(Note : The resale value of an object in the selected subset with no preobjects is always equal to its potential value.)<br /><br />
(Note : The resale value of an object in the selected subset is a function of the selected subset and the potential value of that object.)<br /></p>
<p> The thief has asked freakin' news to find the maximum attainable resale value. <i>Your job is to do this task for freakin' news.</i><br /></p>
<h3>Formal Statement </h3>
<p> There are n objects numbered 1,2,...n. Object i has non-negative weight w[i] and a non-negative value v[i]. The knapsack has a weight capacity C.<br /></p>
<p> Given a directed acyclic graph G with these objects as vertices. The in-degrees of the vertices are all 0 or 1.<br /></p>
<p> If there is a path from object A to object B in G then A is said to be a pre-requisite of B.<br /></p>
<p> If S is a subset of the objects and i is an object belonging to S, then the resale value of object i wrt S is<br /><br />
	v[i] : if all pre-requisites of i belong to S.<br /><br />
	0 : otherwise.	<br /></p>
<p> The resale value of a subset S of the objects is the sum of values of all its elements wrt S.<br />				</p>
<p> The weight of a subset S of the objects is the sum of weights of all its elements.<br />				</p>
<p> The objective is to pick a subset S of the objects so that its weight is atmost W and its resale value is the maximum possible. Only the maximum value is to be found and not the set S.<br /></p>
<h3>Input Format </h3>
<p>The first line of input contains two space seperated integers - n (the number of objects) and C (the capacity of the knapsack). <br /> The second line contains n space seperated non-negative integers w[1], w[2], ... w[n] : the weights of the objects. <br /> The third line contains n space seperated non-negative integers v[1], v[2], ... v[n] : the values of the objects. <br /> The fourth line contains n space seperated non-negative integers p[1], p[2], ... p[n] which describe the preobjects of the objects. If p[i]=0, object i has no preobject. Otherwise, the preobject of object i is p[i]. <br /></p>
<h3>Output Format </h3>
<p>The only line of output contains a single integer : the maximum attainable resale value.<br /></p>
<h3>Constraints </h3>
<p>3&lt;=n&lt;=50<br /><br />
1&lt;=(w[1]+w[2]+...w[n])&lt;=1000<br /><br />
1&lt;=W&lt;=(w[1]+w[2]+...w[n])<br /></p>
<h3>Sample Input </h3>
<p>3 20<br /><br />
10 10 10<br /><br />
5 8 12<br /><br />
0 1 1<br /></p>
<h3>Sample Output </h3>
<p>17<br /></p>
<h3>Explanation </h3>
<p>Since the weights are all same in this case, we have to select 2 of the 3 objects to be carried in the knapsack. Here is a list of all possibilities of selecting 2 objects:<br /><br />
Objects 1 and 2 : Resale Value : 13<br /><br />
Objects 1 and 3 : Resale Value : 17<br /><br />
Objects 2 and 3 : Resale Value : 0 (since 1 is the preobject of both 2 and 3 and 1 is not selected) <br /></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/architk">architk</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-03-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
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